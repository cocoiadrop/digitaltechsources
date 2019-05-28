<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Digitaltechsources</title>

    <!--Stylesheets-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />

    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=" crossorigin="anonymous"></script>

    <style>
        .ui.footer.segment {
            margin: 5em 0em 0em;
            padding: 5em 0em;
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
        }

        nav.ui.large.menu {
           margin-bottom: 0;
        }

        .ui.main.container {
            margin-top: 25px;
        }

        .no-margin-header {
            margin-top: 0 !important;
        }
    </style>
</head>
<body>
    <app>
        <nav class="ui large menu">
            <div class="ui container">
                <a href="{{ url('/') }}" class="header item">
                    <h3>Digitaltechsources</h3>
                </a>
                <a class="item">
                    Resources
                </a>
                <a class="item">
                    Upload
                </a>
                <a class="item">
                    Tutorials
                </a>
                <div class="right menu">
                    @if (Auth::check())
                    <div class="ui simple dropdown item">
                        <i class="user icon"></i>
                        {{Auth::user()->name}}
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <a class="item" href="{{route('account.profile')}}">
                                My Account
                            </a>
                            <div class="ui divider"></div>
                            <div class="inverted red item">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    @else
                    <a href="{{route('login')}}" class="item">
                        <i class="key icon"></i>
                        Login
                    </a>
                    @endif
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
        <footer class="ui inverted vertical footer segment">
            <div class="ui center aligned container">
                <b>Copyright (C) 2019 Liesel Downes, All Rights Reserved</b><br/>
                <div class="ui horizontal inverted small divided link list">
                    <a class="item" href="#">Privacy Policy</a>
                    <a class="item" href="#">
                        <i class="github icon"></i>
                        GitHub
                    </a>
                    <a class="item">
                        Contact Us
                    </a>
                </div>
            </div>
        </footer>
        <script>
            $(document).ready(function(){

                $('.message.close')
                    .on('click', function() {
                        $(this)
                            .closest('.message')
                            .transition('fade')
                        ;
                    })
                ;
            });
        </script>
    </app>
</body>
</html>
