<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Hello, world!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <style>
            .social {
                position: fixed;
                left: 0;
                top: 200px;
                z-index: 2000;
            }
            .social ul {
                list-style: none;
            }
            .social ul li .block {
                display: inline-block;
		color:#fff;
		background: #000;
		padding: 10px 15px;
		text-decoration: none;
		-webkit-transition:all 500ms ease;
		-o-transition:all 500ms ease;
		transition:all 500ms ease;
            }
            .social ul li .icon-general {background:#000000;}
            .social ul li .block:hover {
		background: #000;
		padding: 10px 30px;
            }
        </style>
    </head>
    <body>
        <video src="{{asset('Img/fondo.mp4')}}" autoplay="" loop="" muted="" style="position: fixed;min-width: 100%;min-height: 100%;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);z-index: -1;"></video>
        <nav class="container-fluid"><br><br><br></nav>
        <div class="container-fluid">    
            <div class="row content">
                <div class="col-sm-2 container">
                    <div class="social">
                        <ul>
                            <li>
                                <input type=" text"class="form-control mb-2 mb-sm-0 block" placeholder="Search">
                            </li>
                            <li><a href="#" class="icon-general block">My</a></li>
                        </ul>
                    </div>
                    
                </div>
                @yield('content')
                <div class="col-sm-2 container"></div>
            </div>
        </div>
        <footer class="container-fluid"><br><br><br></footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>