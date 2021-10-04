
<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.includes.header')
    @include('frontend.includes.css')
</head>

<body data-spy="scroll" data-target=".navbar-default" data-offset="100">

    <!-- Page Preloader -->
    <div id="loading-page">
        <div id="loading-center-page">
            <div id="loading-center-absolute">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- Page Preloader -->

    <!-- Content Page -->
    <div class="warpper clearfix">

        <div class="warpper-inner">
            @include('frontend.includes.nav')

            @yield('body')

            @include('frontend.includes.footer')

        </div>

    </div>
    @include('frontend.includes.script')
</body>
</html>
