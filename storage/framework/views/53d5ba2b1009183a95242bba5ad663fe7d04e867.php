<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GOJAMMIT!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" />
        <script src="<?php echo e(asset('js/app.js')); ?>" ></script>
        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                /*font-family: 'Fjalla One', sans-serif;*/
                font-family: 'Roboto Condensed', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                position: relative;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title > img{
                width: 30%;
                height: 30%;
                /*position: absolute;*/
                top: 50px;
            }

            .insertLogo{                
                animation-name: start_page;
                animation-duration: 1s;
                animation-timing-function: linear;
            }

            .illuminateLogo{
                opacity: 0.4;
                animation-name: shine_img;
                animation-duration: 0.5s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            .title > h1{
                font-size: 90px;
                position: absolute;
                top: 55%;
                left: 0px;
                right: 0px;
                margin: auto;
                font-family: 'Roboto Condensed', sans-serif;
                /*font-family: 'Source Code Pro', monospace;*/
                opacity: 0.6;
                color: rgb(22, 22, 22);
                text-shadow:
                    2px 2px 0 white,
                    2px -2px 0 white,  
                    2px -2px 0 white,
                    -2px -2px 0 white,
                    2px 2px 0 white;
                font-weight: bold;
            }

            .links > .btn {
                color: #404040;
                border: #636b6f;
                font-weight: 600;
                text-decoration: none;
            }

            .links .btn-trans:hover{
                background-color: rgba(231, 227, 255, 0.3);
            }

            .links .btn-trans{
                background-color: rgba(255, 255, 255, 0.1);
                border: solid 1px;
            }

            .links .btn-opaque{
                background-color: rgb(13,13,13);
                color: white;
            }

            .m-b-md {
                margin-bottom: 200px;
            }

            #carousel_background, #carousel_background .carousel-inner,
            #carousel_background .item{
                width: 100%;
                height: 100%;
            }

            .one{
                background-image: url("/img-uploads/picture1.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                opacity: 0.7;
            }

            .two{
                background-image: url("/img-uploads/picture2.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                opacity: 0.7;
            }

            .three{
                background-image: url("/img-uploads/picture3.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                opacity: 0.7;
            }

            @keyframes  start_page{
                0%{
                    width: 100%;
                    height: 100%;
                    opacity: 0;
                }
                100%{
                    width: 30%;
                    height: 30%;
                    opacity: 0.7
                }
            }

            @keyframes  shine_img{
                0%{
                    filter: brightness(50%);
                }
                100%{
                    filter: brightness(200%);
                }
            }

            @keyframes  drop_text{
                0%{
                    top: -100px;
                }
                100%{
                    top: 300px;
                }
            }
        </style>
    </head>
    <body>
        <div id="carousel_background" class="carousel slide affix" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active one">
                    <div class="carousel-caption">
                        <h3>Discover</h3>
                        <p>Beautiful flowers in Kolymbari, Crete.</p>
                    </div>
                </div>
                <div class="item two">
                    <div class="carousel-caption">
                        <h3>Meet</h3>
                        <p>Beautiful flowers in Kolymbari, Crete.</p>
                    </div>
                </div>
                <div class="item three">
                    <div class="carousel-caption">
                        <h3>Enjoy</h3>
                        <p>Beautiful flowers in Kolymbari, Crete.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>`
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a class="btn btn-default btn-trans" href="<?php echo e(url('/login')); ?>">Login</a>
                        <a class="btn btn-default btn-trans" href="<?php echo e(url('/register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    <img id="logo" class="insertLogo" src="/img-uploads/gojammitLogo.svg" />
                    <h1>GOJamIt!</h1>
                </div>
            </div>
        </div>
    </body>

    <script type="text/javascript">
        
    window.setTimeout(function(){
        console.log("changed image");
        document.getElementById("logo").className="illuminateLogo";
    }, 1000)

    </script>
</html>
