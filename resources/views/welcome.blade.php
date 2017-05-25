<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

                <div class="site-wrapper">
                    <div class="site-wrapper-inner">
                        <div class="cover-container">
                            <div class="masthead clearfix">
                                <div class="inner">
                                    <h3 class="masthead-brand">Cover</h3>

                                    <ul class="nav masthead-nav">
                                        <li class="active">
                                            <a href="http://bootsnipp.com/iframe/g6GWQ" target=
                                            "_blank">View full screen</a>
                                        </li>

                                        <li>
                                            <a href="#">Features</a>
                                        </li>

                                        <li>
                                            <a href="#">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="inner cover">
                                <h1 class="cover-heading">Full screen background cover page.</h1>

                                <p class="lead">Cover is a one-page template for building simple and
                                    beautiful home pages. Download, edit the text, and add your own
                                    fullscreen background color and photo to make it your own.

                                    <small>    <br> <a href="http://bootsnipp.com/iframe/g6GWQ" target=
                                        "_blank">Best viewed on full screen</a></small>

                                </p>

                                <p class="lead"><a class="btn btn-lg btn-info" href="#">Learn
                                        more</a></p>
                            </div>

                            <div class="mastfoot">
                                <div class="inner">
                                    <!-- Validation -->

                                    <p><a href=
                                          "http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2Fg6GWQ"
                                          target="_blank"><small>HTML</small><sup>5</sup></a></p>


                                    <p><a href=
                                          "https://github.com/twbs/bootlint"
                                          target="_blank"><small>Checked with Bootlint</small></a></p>



                                    <p>© 2014 Your Name ~ <a href=
                                                             "http://getbootstrap.com/">Bootstrap</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>
