<html lang="{{config('app.locale')}}">
    <body>
    <span id="badge">0</span>
    <p>mehehe<p>
       @yield('content');
    </body>
    <script>
        var $badge = $('#badge'); // cache 
        setInterval(function () {
        var value = parseInt($badge.html());
            value++;
            $badge.html(value);
        }, 1000);
    </script>
</html>