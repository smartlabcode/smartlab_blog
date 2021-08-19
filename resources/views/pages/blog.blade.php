<style>
    :root {
        --shadow-color: rgba(0, 53, 145, 0.15);
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #4885fa;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
        scroll-behavior: smooth;
    }

    body {
        margin: 0;
    }

    * {
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
    }

    #blog-text {
        font-size: 1.2rem !important;
    }

    #blog-text ul {
        padding-left: 16px !important;
    }

    .contain {
        max-width: 1600px;
        width: 90%;
        margin: 0 auto;
    }

    .button {
        cursor: pointer;
        border: none;
        border-radius: 35px;
        width: 260px;
        height: 70px;
        font-size: 1.4em !important;
        font-weight: 500;
        color: white;
        background-color: var(--button-bg-color);
        border: 1px solid var(--button-bg-color);
        transition: all 0.2s ease-in;
    }

    .button:focus {
        outline: 0;
    }

    .button:hover {
        background-color: white;
        color: var(--button-bg-color);
        border: 1px solid var(--button-bg-color);
    }

    .h1-font {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 3em;
        margin-top: 0;
        margin-bottom: 25px;
        color: var(--h1-color);
    }

    .h2-font {
        font-family: "Montserrat", sans-serif;
        font-size: 2em;
        color: var(--h2-color);
    }

    .p-font {
        font-family: "Source Sans Pro", sans-serif;
        font-size: 1.5em;
        font-weight: 300;
        color: var(--h1-color);
    }

    main {
        position: relative;
        font-family: "Source Sans Pro", sans-serif;
        overflow-x: hidden;
    }

    .blog-bg-container {
        position: absolute;
        width: 100vw;
        height: 100%;
        top: 0;
        overflow-x: hidden;
        overflow-y: hidden;
    }

    .blog-top-bg {
        position: absolute;
        top: -725px;
        right: -639px;
        z-index: -100;
        width: 100%;
    }

    .blog-circle1 {
        position: absolute;
        width: 20%;
        top: -150px;
        z-index: -100;
    }

    .blog-circle2 {
        position: absolute;
        width: 20%;
        top: -110px;
        left: -248px;
        z-index: -100;
    }

    .blog-circle3 {
        position: absolute;
        width: 20%;
        right: -110px;
        top: 1000px;
        z-index: -100;
    }

    .blog-image-container {
        position: relative;

        border-radius: 25px;
        margin-bottom: 100px;
        margin-top: 150px;
    }

    .blog-image {
        width: 100%;
        object-fit: cover;
        max-height: 525px;
        border-radius: 25px;
    }

    .blog-back {
        position: absolute;
        padding: 0;
        height: 75px;
        width: 75px;
        border-radius: 42.5px;
        transform: translateY(45%);
        bottom: 0;
        left: 20px;
        z-index: 99;
        border: none;
        background-color: var(--button-bg-orange);
        transition: all 0.2s ease-in-out;
        cursor: pointer;
        overflow: hidden;
    }

    .blog-back:focus {
        outline: none;
    }

    .blog-back:hover {
        width: 200px;
    }

    .blog-back:hover img {
        transform: translate(-40%, -20%);
    }

    .blog-back:hover span {
        opacity: 1;
        width: 100px;
    }

    .blog-back img {
        width: 200%;
        height: 200%;
        transform: translate(-25%, -20%);
        transition: all 0.2s ease-in-out;
    }

    .blog-back span {
        color: white;
        font-family: "Source Sans Pro", sans-serif;
        font-size: 1.3em;
        display: inline-block;
        opacity: 0;
        position: absolute;
        transform: translate(59%, 50%);
        white-space: nowrap;
        bottom: 50%;
        width: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        transition: all 0.2s ease-in-out;
    }

    .blog-social {
        position: absolute;
        right: 0;
        bottom: 0;
        height: 75px;
        display: flex;
        transform: translateY(50%);
    }

    .blog-social div {
        height: 75px;
        width: 75px;
        cursor: pointer;
        margin-right: 20px;
        z-index: 100;
    }

    .blog-social img {
        pointer-events: none;
        width: 200%;
        height: 200%;
        transform: translate(-25%, -20%);
    }

    .blog-content {
        margin-bottom: 100px;
    }

    .blog-content .p-font {
        font-size: 1.2em;
        line-height: 30px;
    }

    .blog-content-h3 {
        display: flex;
        align-items: baseline;
        justify-content: space-between;
    }

    .blog-content-h3 h3 {
        margin-top: 0;
        font-size: 1.4em;
    }

    .blog-content-h3 span {
        font-family: "Source Sans Pro", sans-serif;
        font-size: 1.1em;
    }

    .blog-subscribe-container {
        display: flex;
        border-bottom: 1px solid var(--shadow-color);
        padding-top: 20px;
        padding-bottom: 50px;
        align-items: center;
    }

    .blog-subscribe-form {
        display: flex;
        justify-content: space-around;
        border-radius: 20px;
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
        padding: 50px 20px;
        margin-left: 50px;
    }

    .blog-subscribe-form-left>h3 {
        margin-top: 0;
    }

    .blog-subscribe-form-left .h1-font {
        font-size: 1.7em;
        font-weight: bold;
    }

    .blog-subscribe-form-right {
        flex-basis: 60%;
    }

    .blog-subscribe-form-right div {
        display: flex;
    }

    .blog-subscribe-form-right p {
        border-bottom: 1px solid var(--shadow-color);
        padding: 0 20px 40px 0;
        margin-top: 0;
        margin-bottom: 40px;
    }

    .blog-subscribe-form-right input {
        flex-basis: 100%;
        margin-right: 25px;
        border-radius: 35px;
        border: 1px solid var(--shadow-color);
        padding-left: 35px;
        transition: all 0.2s ease-in-out;
    }

    .blog-subscribe-form-right input:focus {
        outline: none;
        border: 1px solid var(--button-bg-color);
    }

    .blog-subscribe-form-left label {
        display: block;
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
    }

    .blog-recent-container {
        display: flex;
        justify-content: space-between;
    }

    .blog-recent-container div {
        flex-basis: 25%;
        cursor: pointer;
    }

    .blog-recent-padding-border {
        padding: 0 50px;
        border-left: 1px solid var(--shadow-color);
    }

    .blog-recent-container .h2-font {
        font-size: 1.2em;
        margin-bottom: 0;
        margin-top: 0;
    }

    .blog-recent-container p {
        margin-bottom: 0;
    }

    .recent {
        margin-top: 50px;
        margin-bottom: 50px;
        font-size: 1.5em;
        font-weight: bolder;
    }

    .recent-blogs:hover {
        text-decoration: none;
    }

    .margin-bottom {
        margin-bottom: 50px;
    }

    #description {
        visibility: hidden;
    }

    .blog-social a {
        width: 100%;
        height: 100%;
        display: inline-block;
        border-radius: 50%;
    }

    .recent-blogs {
        margin-bottom: 25px;
    }

    #form-container {
        width: 50%;
        margin-top: 50px;
        margin-bottom: 50px;
        position: relative;
    }

    .contact-form {
        display: flex;
        flex-wrap: wrap;

    }

    .contact-form-group {
        flex-basis: 100%;
        display: flex;
        justify-content: space-between;
    }

    .contact-form-group div {
        flex-basis: 47%;

    }

    .contact-form-group label {
        font-size: 1rem;
        font-family: "Montserrat", sans-serif;
        margin-bottom: 5px !important;
        margin-top: 0.5rem !important;
    }

    .contact-form-group input,
    .contact-form-group label,
    .contact-form-group textarea {
        width: 100%;
        margin-top: 5px;
    }

    .contact-form-group input,
    textarea {
        padding: 15px 25px;
        border-radius: 10px;
        background-color: rgba(122, 161, 233, .2);
        border: 2px solid rgba(255, 255, 255, 0);
        resize: none !important;
        color: #212529;
        font-size: 1rem;
        font-family: "Montserrat", sans-serif !important;
    }

    .contact-form-group input:focus,
    textarea:focus {
        outline: none;
        border: 2px solid rgba(122, 161, 233);
    }

    .textarea {
        display: flex;
        flex-direction: column;
    }

    .submit {
        margin: 0 auto;
        margin-top: 40px;
        background-color: var(--button-bg-orange);
        border: 1px solid var(--button-bg-orange);
        z-index: 10;
    }

    .contact-form-group {
        height: 0;
        overflow: hidden;
        transition: height 0.5s ease-in-out;
    }

    .expanded {
        height: 95px;

    }

    .expandedTextArea {
        height: 185px;
    }

    #contactUs {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        transition: opacity 1s ease-in-out;
    }

    .fade-away {
        opacity: 0;
    }

    .IN-widget {
        position: absolute;
        left: 0 !important;
        top: 0 !important;
        width: 100% !important;
        height: 100% !important;
        opacity: 0;
    }

    .IN-widget span {
        width: 100% !important;
        height: 100% !important;
    }

    @media screen and (min-width: 2000px) {
        .blog-top-bg {
            top: -1050px;
            right: -760px;
        }

        .blog-circle1 {
            top: -610px;
        }

        .blog-circle3 {
            top: 1000px;
        }
    }

    @media screen and (max-width: 1440px) {
        .blog-top-bg {
            top: -560px;
            right: -450px;
        }
    }

    @media screen and (max-width: 1024px) {
        .blog-top-bg {
            top: -436px;
            right: -447px;
            width: 120%;
        }

        .blog-subscribe-container {
            flex-direction: column;
        }

        .blog-subscribe-form {
            margin-left: 0;
            margin-top: 50px;
            width: 95%;
        }

        .blog-recent-padding-border {
            padding: 0 20px;
        }
    }

    @media screen and (max-width: 768px) {
        .blog-top-bg {
            width: 147%;
            right: -431px;
            top: -436px;
        }

        #blog-text img {
            width: 100% !important;
        }

        .blog-recent-container {
            flex-wrap: wrap;
        }

        .recent-blogs {
            flex-basis: 50%;

        }

        .blog-back {
            width: 50px;
            height: 50px;
        }

        .blog-social {
            height: 50px;
        }

        .blog-social div {
            height: 50px;
            width: 50px;
        }

        .blog-subscribe-form {
            margin-top: 25px;
            flex-direction: column;
            width: 100%;
            margin-left: 0;
        }

        .blog-subscribe-form-left {
            margin-bottom: 25px;
        }

        .blog-recent-container div {
            flex-basis: 50%;
        }
    }

    @media screen and (max-width: 425px) {
        .contain {
            width: 95%;
        }

        .recent-blogs {
            flex-basis: 100%;
        }

        .blog-subscribe-form {
            width: 95%;
        }

        .blog-top-bg {
            top: -426px;
            width: 251%;
            right: -620px;
            transform: rotate(0deg);
        }

        .blog-subscribe-form-right div {
            flex-direction: column;
            align-items: center;
        }

        .blog-subscribe-form-right button {
            width: 100%;
        }

        .blog-back {
            left: 10px;
        }

        .blog-recent-container {
            flex-wrap: wrap;
        }

        .blog-recent-container div {
            flex-basis: 45%;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--shadow-color);
        }

        .blog-recent-padding-border {
            padding: 0 0px;
            border: none;
        }

        .blog-subscribe-form-right input {
            flex-basis: auto;
            width: 100%;
            height: 75px;
            text-align: center;
            margin-right: 0;
            padding: 10px;
            margin-bottom: 20px;
        }

        .blog-content-h3 {
            flex-direction: column;
            margin-bottom: 50px;
        }

        .blog-social div {
            margin-right: 10px;
        }


    }

    @media screen and (max-width: 320px) {
        .blog-top-bg {
            right: -130px;
            top: -183px;
            width: 156%;
        }

    }
</style>
<?php $image_link = "https://smartlab.ba{$blog->image_path}";
?>
<!--@extends('layouts.app')-->
@section('description', clean($blog->text))
@section('title', clean($blog->heading))
@section('image', clean($image_link))
@section('content')

<div class="loader-container">
    <div class="css-animation-container">
        <div class="css-animation"></div>
    </div>
</div>
<div class="blog-bg-container">
    <img class="blog-top-bg" src={{"/images/blog-top-bg.svg"}} />
    <img class="blog-circle1" src={{"/images/fluid-bright-circle.svg"}} />
    <img class="blog-circle2" src={{"/images/fluid-bright-circle.svg"}} />
    <img class="blog-circle3" src={{"/images/fluid-bright-circle.svg"}} />
</div>
<div class="contain">
    <div class="blog-image-container">
        <img class="blog-image" src="https://smartlab.ba/{{$blog->image_path}}" />
        <a href="{{ env("BLOG_DOMAIN")  }}/@if(App::getlocale()){{App::getlocale()}}@else en @endif"><button class="blog-back">
                <span>Back to blog</span>
                <img src={{"/images/back-to-home.svg"}} />
            </button></a>

        <div class="blog-social">
            <div>
                <a id="share-btn"><img src={{"/images/fb-blog-share.svg"}} /></a>
            </div>
            <div style="position: relative;">

                <a href="#" class="twitter-share"><img src={{"/images/twitter-share.svg"}} /></a>
            </div>
            <div style="position: relative;">
                <img src={{"/images/linkedin-share.svg"}} />
                <script type="IN/Share" data-url="<?php
                                                    echo ("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

                                                    ?>"></script>
            </div>
        </div>
    </div>
    <div class="blog-content">
        <h1 class="h1-font">{{$blog->heading}}</h1>
        <span>{{$blog->created_at}}</span>
        <!--<div class="blog-content-h3"> 
            <h3 class="h2-font">
                {{$blog->heading}}
                <span>Treba se dodati podnaslov za blogove</span>
            </h3>-->

    </div>
    <div id="blog-text">
        <input id="hid" type="hidden" value="{{$blog->text}}">

        <p class="p-font" id="text">
            {{$blog->text}}
            <?php function clean($string)
            {
                return trim(urldecode(html_entity_decode(strip_tags($string))));
            } ?>
        </p>
    </div>
</div>
<div id="form-container" class="contain" style="display: none;">
    <form class="contact-form" action="/contact" method="POST">
        <!-- Include token -->
        @csrf
        <div class="contact-form-group">
            <div>
                <label for="name">*@lang('index.formName')</label>
                <input type="text" name="name" id="name" required />
            </div>
            <div>
                <label for="surnanme">*@lang('index.formSurname')</label>
                <input type="text" name="lastname" id="lastname" required />
            </div>
        </div>
        <div class="contact-form-group">
            <div>
                <label for="subject">*@lang('index.formSubject')</label>
                <input type="text" name="subject" id="subject" required />
            </div>
            <div>
                <label for="email">*@lang('index.formEmail')</label>
                <input type="email" name="email" id="email" required />
            </div>
        </div>
        <div class="contact-form-group textarea">
            <label for="message">*@lang('index.formMessage')</label>
            <textarea name="message" rows="7" id="message" required></textarea>
        </div>
        <button id="blogFormButton" class="button submit button-orange" value="Send">Send</button>

    </form>
    <button id="contactUs" class="button submit button-orange">Contact us</button>
</div>
<div class="blog-subscribe-container contain">
    <div>
        <h2 class="h1-font">SmartLab Blog</h2>
        <p class="p-font">
            Stay up to date with the latest design, video, development, and
            programming news.
        </p>
    </div>

    <form class="blog-subscribe-form">
        <div class="blog-subscribe-form-left">
            <h3 class="h1-font">@lang('index.subscribeBlog')</h3>
            <p class="p-font">Subscribe via e-mail</p>
            <label><input type="checkbox" name="categories" value="design" />
                Design</label>
            <label><input type="checkbox" name="categories" value="online_courses" />
                Online Courses</label>
            <label><input type="checkbox" name="categories" value="development" />
                Development</label>
            <label><input type="checkbox" name="categories" value="video" />
                Video animation</label>
        </div>
        <div class="blog-subscribe-form-right">
            <p>
                We're committed to your privacy. SmartLab Blog uses the
                information you provide to us to contact you about our relevant
                content, products, and services. You mayunsubscribe from these
                communications at any time. For more information, check out our
                privacy policy.
            </p>
            <div>
                <input type="email" name="email" placeholder="e-mail address" />
                <button class="button">Subscribe</button>
            </div>
        </div>
    </form>
</div>
<div class="contain">
    <p class="h1-font recent">Recent Posts:</p>
    <div class="blog-recent-container">
        @foreach($blogs as $blog)
        @if($loop -> iteration <=4) <a class="recent-blogs" href="/blog/{{$blog->id}}" target="_blank">
            <h4 class="h2-font">{{$blog -> heading}}</h4>
            <p>{{$blog->created_at}}</p>
            </a>
            @endif
            @endforeach
    </div>
</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var getWindowOptions = function() {
            var width = 500;
            var height = 350;
            var left = (window.innerWidth / 2) - (width / 2);
            var top = (window.innerHeight / 2) - (height / 2);

            return [
                'resizable,scrollbars,status',
                'height=' + height,
                'width=' + width,
                'left=' + left,
                'top=' + top,
            ].join();
        };
        var twitterBtn = document.querySelector('.twitter-share');
        var shareUrl = 'https://twitter.com/intent/tweet?url=' + location.href;
        twitterBtn.href = shareUrl; // 1

        twitterBtn.addEventListener('click', function(e) {
            e.preventDefault();
            var win = window.open(shareUrl, 'ShareOnTwitter', getWindowOptions());
            win.opener = null; // 2
        });
        document.getElementById("share-btn").addEventListener('click', function() {
            FB.ui({
                method: 'share',
                href: location.href, // Current url
            }, function(response) {});
        });
        let loaderContainer = document.querySelector(".loader-container");
        loaderContainer.classList.add("loaderEnd");
        setTimeout(function() {
            loaderContainer.style.display = "none";
        }, 1000)
        let contactUs = document.querySelector("#contactUs");
        let contactFormGroup = document.querySelectorAll(".contact-form-group");
        let blogFormButton = document.querySelector("#blogFormButton");

        function expand() {
            //console.log("expand")
            contactUs.classList.add("fade-away");
            setTimeout(function() {
                contactUs.style.display = "none";
            }, 500)
            for (let i = 0; i < contactFormGroup.length; i++) {
                if (i < 2) {
                    contactFormGroup[i].classList.add("expanded");
                } else {
                    contactFormGroup[i].classList.add("expandedTextArea");
                }

            }

        }
        contactUs.addEventListener("click", expand);
    });

    (function() {
        document.getElementById("text").innerHTML = document.getElementById("hid").value;

    })();
</script>
@endsection