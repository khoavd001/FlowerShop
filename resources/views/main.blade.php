<!DOCTYPE html>
<html lang="en">

<head>

    @include('head')

    <link rel="stylesheet" href="{{asset('../public/css/header.css')}}"/>
    <link rel="stylesheet" href="{{asset('../public/css/responsive.css')}}">

</head>


<body>

    @include('header')
    <div class="grid">
        <div class="grid__row">
            <div class="grid__column-2">

                @include('menu')

            </div>
            <div class="grid__column-10">

                @yield('content')

            </div>
        </div>
    </div>

    @include('footer')
</body>
</html>
