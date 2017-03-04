<!DOCTYPE html>
    @include('layouts.partials.head')
    <body class="toggled sw-toggled">
        @include('layouts.partials.header')

        <section id="main">
        <aside id="sidebar">
            <div class="sidebar-inner c-overflow">
                @if(Auth::check())
                    @include('layouts.partials.profile_menu')
                @endif
                @include('layouts.partials.main_menu')
            </div>
        </aside>

        <section id="content">
            <div class="container">
                <div class="block-header">
                    @if(Auth::check())
                        <h2>@yield('title')</h2>
                    @endif
                </div>

                <div class="card">
                    <div class="card-header">
                        @yield('card-header')
                    </div>

                    @yield('content')
                </div>
            </div>
        </section>
    </section>

        <footer id="footer">
            Copyright &copy; 2017 SIC
        </footer>

        @include('layouts.partials.oldie')

        @include('layouts.partials.js_files')
    </body>
</html>