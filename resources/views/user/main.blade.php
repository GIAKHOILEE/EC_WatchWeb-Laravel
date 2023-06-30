<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.head')

</head>

<body > <!--class="animsition" -->

    <div class="container">


        <!-- Header -->
        @include('user.header')

        @yield('home')

        @yield('sanpham')

        @yield('history')


        @include('user.footer')


    </div>
    @include('user.foot')


</body>
</html>
