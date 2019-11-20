<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ ('fonts/fonts.css') }}">
    <link rel="stylesheet" href="{{ ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ ('css/style.css') }}">
    <link rel="stylesheet" href="{{ ('css/mobile-first.css') }}">

    <title>Wezom</title>
</head>
<body>

<div class="header">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                @include('layouts.logo')
            </div>
            <div class="col-auto">
                <ul class="nav-list">
                    @foreach ($mock->item as $list__item)
                        @include('layouts.item')
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main">
    @include('layouts.container')
    <div class="container">
        <div class="below">
            <div class="row justify-content-xl-between justify-content-center">
                @foreach($mock->card as $card)
                    <div class="col-auto col-xl-3 col-lg-4 col-md-5 col-sm-6 pb-3">
                        @include('layouts.card')
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row justify-content-xl-between justify-content-center">
            <div class="col-xl-8 col-12">
                <div class="wrapper">
                    @include('layouts.wrapper')
                    <div class="row justify-content-center pt-5">
                        @foreach($mock->aside as $aside)
                            <div class="col-auto col-sm-9 col-md-6 pb-4">
                                @include('layouts.aside')
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="content col-auto col-xl-3 col-sm-12">
                @include('layouts.content')
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="preview">
            <div class="row justify-content-xl-between justify-content-center align-items-center">
                <div class="col-auto">
                    @include('layouts.social')
                </div>
                <div class="col-auto">
                    @foreach($mock->developer as $developer)
                        @include('layouts.developer')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>