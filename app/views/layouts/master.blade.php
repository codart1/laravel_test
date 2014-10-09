<html>
    <body>
    	<h1>I'm masterrrr</h1>
    	<br>
    	<br>

        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content', 'No data to show')
        </div>
    </body>
</html>