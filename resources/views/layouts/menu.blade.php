<style>
    :root {
        --shadow-color: rgba(0, 53, 145, 0.15);
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #4885FA;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
        scroll-behavior: smooth;
    }

    .shadow {
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
    }

    nav {
        transition: all 0.2s ease-in-out;
    }

    #nav-top {
        height: 30px;
        margin-top: 15px;
        overflow: hidden;
        transition: all 0.2s ease-in-out;
    }

    ul {
        margin-bottom: 0;
        padding-left: 0;
    }

    .contain {
        max-width: 1440px;
        width: 90%;
        margin: 0 auto;
    }

    .nav-top {
        display: flex;
        justify-content: flex-end;
        font-family: "Montserrat", sans-serif;
    }

    .nav-top p {
        opacity: .5;
        color: #fff;
        margin-right: 50px;
    }

    .nav-top p span {
        margin-right: 20px;
        color: white;
    }

    .nav-top p a:hover {
        text-decoration: none;
    }

    #languageForm {
        /*position: relative;
        left: 20px;*/
    }

    .nav-top label {
        text-transform: uppercase;
        position: relative;
        right: 20px;
        color: #fff;
        opacity: .5;
        cursor: pointer;
    }

    .language-selected {
        opacity: 1 !important;
        font-weight: 700;
    }

    .nav-top input {
        visibility: hidden;
    }

    nav {
        width: 100%;
        position: fixed;
        top: 0;
        z-index: 100;
    }

    .nav-logo {
        height: 35px;
        width: 150px;
    }

    .nav-logo-container span {
        font-family: "Montserrat", sans-serif;
        position: relative;
        font-weight: bold;
        bottom: -10px;
    }

    .nav-logo-container {
        display: flex;
        flex-direction: column;
    }

    .nav-bot {
        display: flex;
        justify-content: space-between;
        transition: 0.2s all ease-in-out;
    }

    .nav-bot-left {
        display: flex;
        flex-basis: calc(100% - 16px);
        justify-content: space-between;
    }

    .nav-bot-right {
        display: flex;
        overflow: hidden;
        transition: all 0.2s ease-in-out;
    }

    .nav-bot .filters {
        font-family: "Montserrat", sans-serif;
        cursor: pointer;
        border: none;
        border-radius: 35px;
        width: 300px;
        height: 60px;
        font-size: 1.1em !important;
        padding: 10px 22px;
        color: white;
        transition: all 0.2s ease-in-out;
        margin-left: 15px;
    }

    .expanded {
        border-radius: 15px 15px 0 0 !important;
    }

    select:not(:focus) {
        border-radius: 35px;
    }

    option:hover {
        background-color: white;
    }

    .--blue-background {
        background-color: var(--button-bg-color)
    }

    .search-container {
        position: relative;
    }

    .nav-bot .search {
        width: 250px;
        padding: 10px 22px;
        color: unset !important;
        font-family: "Source Sans Pro", sans-serif;
        font-size: 1.4em;
        cursor: text;
    }

    .search-label {
        cursor: text;
        position: absolute;
        top: 50%;
        left: 37px;
        transform: translateY(-50%);
        font-family: "Source Sans Pro", sans-serif;
        font-style: italic;
        font-size: 1.4em;
        opacity: 0.5;
        transition: all 0.2s ease-in-out;
    }

    .nav-bot .search:focus+.search-label {
        font-size: 1em;
        top: 15%;
    }

    .home-text::before {
        content: "";
        width: 10px;
        height: 10px;
        display: inline-block;
        position: absolute;
        background-color: white;
        left: 22px;
        top: 50%;
        transform: translateY(-50%) rotate(45deg);
        clip-path: polygon(0 0, 0% 100%, 100% 100%);
    }


    .home-button {
        position: relative;
    }

    .home-button:hover .home-text::before {
        animation: move-left 1s ease-in-out forwards;
    }

    .select-option {
        padding: 20px;
    }

    @keyframes move-left {
        0% {
            left: 22px;
        }

        33% {
            left: 10px;
        }

        66% {
            left: 15px;
        }

        100% {
            left: 10px;
        }
    }



    .nav-bot .filters:focus {
        outline: none;
    }

    .padding-both {
        padding-top: 15px;
        padding-bottom: 15px;
        background-color: white;
        transition: all 0.2s ease-in-out;
    }

    #search {
        border: 1px solid white;
        transition: all 0.2s ease-in-out;
    }

    .nav-button {
        display: none;
    }

    @media screen and (max-width: 1300px) {

        .nav-bot-right {
            width: 100%;
            animation-direction: forwards;
            animation-duration: 0.5s;
            animation-fill-mode: forwards;
            justify-content: flex-end;
            height: 0;
        }

        .nav-bot-left {
            flex-basis: 100%;
        }

        .nav-bot {
            flex-wrap: wrap;
        }

        .margin-top-15 {
            margin-top: 15px;
        }

        @keyframes width {
            from {
                height: 0px;
            }

            to {
                height: 145px;
            }
        }

        @keyframes width-reverse {
            from {
                height: 145px;
            }

            to {
                height: 0px;
            }
        }

        .nav-button {
            height: 30px;
            width: 30px;
            display: inline-block;
            position: absolute;
            right: 5%;
            top: 63px;
            transition: all 0.2s ease-in-out;
        }

        .nav-button-inner {
            height: 5px;
            width: 30px;
            display: inline-block;
            background-color: var(--button-bg-color);
            position: absolute;
            top: 0;
            border-radius: 2px;
            animation-duration: .2s;
            animation-timing-function: ease-in;
            animation-fill-mode: forwards;
        }

        .nav-button-inner-before {
            height: 5px;
            width: 30px;
            display: inline-block;
            background-color: var(--button-bg-color);
            position: absolute;
            top: 10px;
            border-radius: 2px;
            animation-duration: .2s;
            animation-timing-function: ease-in;
            animation-fill-mode: forwards;
        }

        .nav-button-inner-after {
            height: 5px;
            width: 30px;
            display: inline-block;
            background-color: var(--button-bg-color);
            position: absolute;
            top: 20px;
            border-radius: 2px;
            animation-duration: .2s;
            animation-timing-function: ease-in;
            animation-fill-mode: forwards;
        }

        @keyframes navBtn {
            from {
                width: 30px;
            }

            to {
                width: 0px;
            }
        }

        @keyframes navBtnReverse {
            from {
                width: 0px;
            }

            to {
                width: 30px;
            }
        }

        @keyframes navBtnAfter {
            from {
                transform: rotate(0deg);
                top: 20px;
            }

            to {
                transform: rotate(-45deg);
                top: 10px;
            }
        }

        @keyframes navBtnAfterReverse {
            from {
                transform: rotate(-45deg);
                top: 10px;
            }

            to {
                transform: rotate(0deg);
                top: 20px;
            }
        }

        @keyframes navBtnBefore {
            from {
                transform: rotate(0deg);
                top: 10px;
            }

            to {
                transform: rotate(45deg);
                top: 10px;
            }
        }

        @keyframes navBtnBeforeReverse {
            from {
                transform: rotate(45deg);
                top: 10px;
            }

            to {
                transform: rotate(2deg);
                top: 10px;
            }
        }
    }

    @media screen and (max-width: 768px) {
        .nav-bot-right {
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .nav-bot-right .filters {
            flex-basis: 49%;
            margin: 0;
        }

        .search-container {
            flex-basis: 100%;
            margin-bottom: 15px;
        }

        #search {
            width: 100%;
            margin: 0;
        }
    }

    @media screen and (max-width: 425px) {


        .nav-button {
            top: 130px;
        }

        .nav-logo-container {
            align-self: center;
        }

        .nav-top p>span:first-of-type {
            display: none;
        }

        .nav-top p span {
            margin-right: 5px;
        }

        .home-button {
            margin-left: 0 !important;
        }

        .nav-bot a {
            align-self: center;
        }

        #languageForm {
            white-space: nowrap;
        }
    }

    @media screen and (max-width: 425px) {
        .nav-bot .filters {
            width: 175px;
            height: 50px;
        }

        .nav-top {
            justify-content: space-between;
        }

        .nav-top p {
            margin-right: 0;
        }

        .nav-logo {
            height: 35px;
            width: 110px;
        }

        nav {
            top: -2px;
        }
    }

    @media screen and (max-width: 425px) {
        .nav-top p {
            display: flex;
            flex-direction: column;
            margin-bottom: 0;
        }

        #nav-top {
            height: 40px;
            align-items: center;
            margin-bottom: 15px;
        }
    }
</style>
@section('menu')
<nav>
    <ul class="contain">

        <div class="nav-top" id="nav-top">

            <p><span>@lang('menu.call'): </span><a href="tel: +38733956222"><span>+387 33 956 222</span></a></p>
            <form id="languageForm" action="/language" method="POST">
                <!-- Form for sending new language after user clicks on one of the select options - page is refreshed with new language translations -->
                @csrf
                @method('PUT')

                <input type="radio" name="language" id="en" value="en" onclick="changeSiteLanguage(this.value)" @if(session('language')=='en' ) checked @endif><label for="en" @if(session('language')=='en' ) class="language-selected" @endif>@lang('menu.english_language')</label>
                {{-- <input type="radio" name="language" id="de" value="de" onclick="changeSiteLanguage(this.value)" @if(session('language')=='de' ) checked @endif><label for="de" @if(session('language')=='de' ) class="language-selected" @endif>@lang('menu.german_language')</label> --}}
                <input type="radio" name="language" id="bs" value="bs" onclick="changeSiteLanguage(this.value)" @if(session('language')=='bs' ) checked @endif><label for="bs" @if(session('language')=='bs' ) class="language-selected" @endif>@lang('menu.bosnian_language')</label>

            </form>

        </div>
        <div class="nav-bot">
            <div class="nav-bot-left">
                <div class="nav-logo-container">
                    <span>BLOG</span>
                    <a href="{{env("BLOG_DOMAIN")}}"><img class="nav-logo" src="{{ asset('images/smartlab-logo.svg') }}" alt="smartlab logo"></a>
                </div>
                <a href="{{env("APP_URL")}}?lang={{App::getlocale()}}"><button class="filters --blue-background home-button"><span class="home-text">@lang('index.homeButton')</span></button></a>
            </div>

            <div class="nav-bot-right">
                <!--<div class="search-container">
                    <input class="filters search" type="search" id="search" name="search">
                    <label for="search" class="search-label">Search...</label>
                </div>

                <select class="filters --blue-background">
                    <option disabled selected>Category</option>
                    <option value="development">Development</option>
                    <option value="online-courses">Online courses</option>
                    <option value="educational">Educational</option>
                    <option value="moodle">Moodle</option>
                </select>
                <select class="filters --blue-background">
                    <option disabled selected>Sorty by</option>
                    <option value="newest">Newest</option>
                    <option value="top-rated">Top Rated</option>
                </select>
            </div>
            <div id="nav-button" class="nav-button">
                <div id="nav-button-inner" class="nav-button-inner"></div>
                <div id="nav-button-inner-before" class="nav-button-inner-before"></div>
                <div id="nav-button-inner-after" class="nav-button-inner-after"></div>
            </div>-->
            </div>
    </ul>
</nav>
<!--
{{--<li class="nav-item">@lang('menu.first_item')</li>--}}
{{--<li class="nav-item">@lang('menu.second_item')</li>--}}
{{--<li class="nav-item">@lang('menu.third_item')</li>--}}
{{--<li class="nav-item">--}}
{{--<a href="http://smartlab_web.localhost/" target="_blank">@lang('menu.fourth_item')</a>--}}
{{--</li>--}}
{{--<li class="nav-item">@lang('menu.fifth_item')</li>--}}
{{--@auth--}}

{{--@if(\Illuminate\Support\Facades\Auth::user()->roles_id == 1)--}}
{{--<li class="nav-item">--}}
{{--<a href="{{route('admins.index')}}">@lang('menu.sixth_item')</a>--}}
{{--</li>--}}
{{--@endif--}}

{{--<li class="nav-item">--}}
{{--<a href="{{route('blogs.index')}}">@lang('menu.seventh_item')</a>--}}
{{--</li>--}}
{{--<li class="nav-item"><a href="{{route('logout')}}">@lang('menu.eight_item')</a></li>--}}
{{--@endauth--}}

<li>



</li>
-->


@endsection
@section('js2')
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        let navTop = document.querySelector("#nav-top");
        let navTopLabel = document.querySelectorAll(".nav-top label");
        let navTopPhone = document.querySelectorAll(".nav-top p span");
       // console.log(navTopLabel, navTopPhone);
        let navBot = document.querySelector(".nav-bot");
        let nav = document.querySelector("nav");

        function scrollBot() {
            navTop.style.height = "0px";
            navTop.style.marginBottom = "0px";
            navTop.style.marginTop = "0px";
            navBot.style.marginTop = "10px";
            navBot.style.marginBottom = "10px";
            nav.style.backgroundColor = "white";
            nav.classList.add("shadow");
        }

        function scrollTop(position) {
            navTop.style.height = "40px";
            navTop.style.marginTop = "10px";
            if (position > 10) {
                nav.style.backgroundColor = "white";

                for (let i = 0; i < navTopLabel.length; i++) {
                    navTopLabel[i].style.color = "black";
                }
                for (let i = 0; i < navTopPhone.length; i++) {
                    navTopPhone[i].style.color = "black";
                }
            } else {
                nav.style.backgroundColor = "transparent";
                nav.classList.remove("shadow");
                navBot.style.marginBottom = "0px";
                for (let i = 0; i < navTopLabel.length; i++) {
                    navTopLabel[i].style.color = "white";
                }
                for (let i = 0; i < navTopPhone.length; i++) {
                    navTopPhone[i].style.color = "white";
                }
            }


        }


        window.addEventListener("scroll", function(e) {
            // "false" if direction is down and "true" if up
            //console.log(this.oldScroll > this.scrollY);
            //console.log(this.scrollY)
            if (this.oldScroll > this.scrollY) {
                //console.log("up")
                scrollTop(this.scrollY);
            } else {
                //console.log("bot")
                scrollBot();

            }
            this.oldScroll = this.scrollY;



        });
    });
</script>
<script>
    function changeSiteLanguage(value) {
        document.getElementById("languageForm").submit();
    }
</script>
@endsection