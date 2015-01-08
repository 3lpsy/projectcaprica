<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Project Caprica</title>
        <meta name="description" content="">
        {{HTML::style('css/normalize.css')}}
        {{HTML::style('css/projectcaprica.css')}}
        {{HTML::style('css/bootstrap.css')}}
        {{HTML::script('s/vendor/modernizr-2.6.2.min.js')}}
    </head>
    <body>
        <div id="wrapper">

            @include('layouts.header')
            @yield("promo")
            <section id="" class="">
                @if (Session::has("message"))
                    <p class="alert"> {{Session::get("message")}}</p>
                @endif
                @yield('search')
                @yield("content")
            </section><!-- end main-content -->

            @yield("pagination")
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write("HTML::script('js/vendor/jquery-1.9.1.min.js')"</script>
        {{HTML::script("js/plugins.js")}}
        {{HTML::script("js/projectcaprica.js")}}
        <script src="https://code.jquery.com/jquery-2.1.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    </body>
</html>
