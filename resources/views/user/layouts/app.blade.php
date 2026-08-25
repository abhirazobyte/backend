<!DOCTYPE html>
<html lang="en">

<head>


    {{View::make('user.layouts.head')}}
</head>
<!--
  HOW TO USE:
  data-theme: default (default), dark, light, colored
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-layout: default (default), compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <div class="wrapper">

        @yield('sidebar')



        <div class="main">
            @yield('navbar')

            <main class="content">
                @yield('content')
            </main>

            <footer class="footer">
                @yield('footer')
            </footer>

        </div>
    </div>

    @yield('script')
    {{-- {{View::make('user.layouts.script')}} --}}
    
</body>

</html>