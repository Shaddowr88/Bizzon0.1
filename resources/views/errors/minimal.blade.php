<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet">
        <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href={{asset("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css")}} integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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

            .code {
                border-right: 2px solid;
                font-size: 200px;
                padding: 0 15px 0 15px;
                text-align: center;
                background: -webkit-linear-gradient(#1426fa, #01d1ff);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .message {
                font-size: 18px;
                text-align: center;

            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="code ">
                @yield('code')
            </div>

            <div class="message pl-5" >
                @yield('message')

                <div class="row">
                    <a class="btn btn-lg btn-block mb-5 mt-4" href="{{ route('login') }}"
                       style="background: linear-gradient(90deg, rgba(33,188,249,0.8925945378151261) 0%, rgba(0,153,255,1) 95%);
                                     filter: brightness(1); box-shadow: 5px 10px 30px rgb(33,188,249);color:white">
                        Retour
                    </a>

                </div>
            </div>

        </div>
    </body>
</html>
