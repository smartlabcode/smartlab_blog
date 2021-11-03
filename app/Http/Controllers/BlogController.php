<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class BlogController extends Controller
{
    public function index($lang = "en")
    {

        App::setlocale($lang);

        session_start();
        session()->put('language', $lang);
        $blogs = DB::select(
            'SELECT 
                      bt.heading,
                      b.image_path, 
                      bt.text, 
                      bta.tag,
                      u.name, 
                      u.lastname,
                      DATE_FORMAT(b.created_at, \'%M %d, %Y\') AS created_at,  
                      b.id, 
                      b.published, 
                      GROUP_CONCAT(bt.language) AS language 
                    FROM blogs AS b
                    LEFT JOIN users AS u ON b.users_id = u.id
                    LEFT JOIN blog_translations AS bt ON b.id = bt.blogs_id
                    LEFT JOIN blog_tags AS bta ON b.id = bta.blogs_id
                    WHERE b.published = "true" AND b.deleted_at IS NULL AND bt.language = "'.$lang.'"
                    GROUP BY b.id ORDER BY b.created_at DESC'
        );
        $perPage = 8;
        $page = 1;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        $total = count($blogs);
        $currentpage = $page;
        $offset = ($currentpage * $perPage) - $perPage ;
        $blogs = array_slice($blogs , $offset , $perPage);

        $pages = $total / $perPage;
        $pages = $pages + 0.5;
        $pages = intval(round($pages));

        // $blogs = $blogs->paginate(5);
        // $blogs = new Paginator($blogs, 5, $_GET['page']);
        return view('layouts.app', [
            'blogs' => $blogs,
            'pages' => $pages,
            'page' => $page

        ]);
    }

    public function show($id, $language = null, $preview = false)
    {

        session_start();

        if (is_null($language)) {

            $lang = session()->get('language');
            if (!isset($lang)) {
                $lang = App::getlocale();
            }
        } else {
            $lang = $language;
            session()->put('language', $language);
        }
        $blogs = DB::select(
            'SELECT 
                      bt.heading,
                      b.image_path, 
                      bt.text, 
                      bta.tag,
                      u.name, 
                      u.lastname,
                      DATE_FORMAT(b.created_at, \'%M %d, %Y\') AS created_at,  
                      b.id, 
                      b.published, 
                      GROUP_CONCAT(bt.language) AS language 
                    FROM blogs AS b
                    LEFT JOIN users AS u ON b.users_id = u.id
                    LEFT JOIN blog_translations AS bt ON b.id = bt.blogs_id
                    LEFT JOIN blog_tags AS bta ON b.id
                    WHERE bt.language = "'.$language.'" AND b.published = "true" AND b.deleted_at IS NULL
                    GROUP BY b.id ORDER BY b.created_at DESC'
        );

        if ($preview == false) {

            $blog = DB::table('blogs')
                ->select(
                    'blog_translations.heading',
                    'blog_translations.language',
                    'users.id',
                    'blogs.id',
                    'blogs.created_at',
                    'blog_translations.text',
                    'blog_translations.language',
                    'blogs.image_path'
                )
                ->leftJoin('users', 'blogs.users_id', '=', 'users.id')
                ->leftJoin('blog_translations', 'blogs.id', '=', 'blog_translations.blogs_id')
                ->where('blogs.id', $id)
                ->where('blogs.published', 'true')
                ->where('blog_translations.language', $lang)
                ->get();
        } else {

            $blog = DB::table('blogs')
                ->select(
                    'blog_translations.heading',
                    'blog_translations.language',
                    'users.id',
                    'blogs.id',
                    'blogs.created_at',
                    'blog_translations.text',
                    'blog_translations.language',
                    'blogs.image_path'
                )
                ->leftJoin('users', 'blogs.users_id', '=', 'users.id')
                ->leftJoin('blog_translations', 'blogs.id', '=', 'blog_translations.blogs_id')
                ->where('blogs.id', $id)
                //->where('blog_translations.language', $lang)
                ->get();
        }
        if (isset($blog[0])) {
                return view(
                'pages.blog',
                [
                    'blog' => $blog[0],
                    'blogs' => $blogs
                ]
            );
        }else {
            abort(404);
        }
        
    }
}
