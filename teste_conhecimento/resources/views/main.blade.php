<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/MyStyle.css">
    <title>@yield('title')</title>
</head>
<body>
    
    <!-- Image and text -->
    <div class="container fundo">
        <div class="container-fluid pt-5">
            
            <div >
            <nav class="navbar navbar-light bg-light ml-5 mr-5 ">
                <a class="navbar-brand" href="/">
                    <img src="./imagens/logo.png" width="140px" height="50%" class="d-inline-block align-top" alt="">
                </a>
                <p class="ml-0"> @yield('title')</p>
            </nav>
                <div class="contentBlade ml-5 mr-5">

                    @yield('content')
                </div>
                
                
            </div>
                
            </div>
        </div>
    </body>
    </html>