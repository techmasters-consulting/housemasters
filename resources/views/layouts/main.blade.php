<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('includes.head')
</head>


<body class="font-ram  bg-opacity-20 text-gray-900 page header-ontop page-index-realestate-single navbar-layout-default" data-colour-scheme="green-bright">

<!-- @plugin: page loading indicator, delete to remove loader -->
<div class="page-loader" data-toggle="page-loader"></div>

<a id="#top" href="#content" class="sr-only">Skip to content</a>

<!-- ======== @Region: #header ======== -->
<div id="header">
@include('includes.header')

</div>
<!--content area -->

@yield('content')
<!-- content area ends -->

<!-- ======== @Region: Copyright Section ======== -->
<div class="footer-bottom d-inline-block w-100 pos-relative pos-zindex-10 bg-white" data-animate="fadeIn" data-animate-delay="0.1">
@include('includes.footer')
</div>
<!--END Copyright Section-->



<!-- Floating "Schedule a showing" button -->


<!-- @modal: the "Schedule a showing" modal -->





<!-- /.modal -->
<!-- @modal: the "Schedule a showing" modal -->






 <!--Load Facebook SDK for JavaScript -->
<!--<div id="fb-root"></div>-->
<!--<script>-->
<!--    window.fbAsyncInit = function() {-->
<!--        FB.init({-->
<!--            xfbml            : true,-->
<!--            version          : 'v3.3'-->
<!--        });-->
<!--    };-->

<!--    (function(d, s, id) {-->
<!--        var js, fjs = d.getElementsByTagName(s)[0];-->
<!--        if (d.getElementById(id)) return;-->
<!--        js = d.createElement(s); js.id = id;-->
<!--        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';-->
<!--        fjs.parentNode.insertBefore(js, fjs);-->
<!--    }(document, 'script', 'facebook-jssdk'));</script>-->

<!-- Your customer chat code -->
<!--<div class="fb-customerchat"-->
<!--     attribution=setup_tool-->
<!--     page_id="535560266890298"-->
<!--     theme_color="#44bec7"-->
<!--     logged_in_greeting="Hi! Do you need a place to call home?"-->
<!--     logged_out_greeting="Hi! Do you need a place to call home?">-->
<!--</div>-->


<!--// Load Facebook SDK for JavaScript -->
     <div id="fb-root"></div>
     <script>
       window.fbAsyncInit = function() {
         FB.init({
           xfbml           : true,
           version         : 'v6.0'
         });
       };

       (function(d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) return;
       js = d.createElement(s); js.id = id;
       js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));</script>

      <!--Your customer chat code -->
     <div class="fb-customerchat"
       attribution=setup_tool
       page_id="535560266890298"
     theme_color="#44bec7"
    logged_in_greeting="Hi! Do you need a place to call home?"
     logged_out_greeting="Hi! Do you need a place to call home?">

     </div>

<!--jQuery 3.3.1 via CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper 1.14.6 via CDN, needed for Bootstrap Tooltips & Popovers -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Bootstrap v4.3.1 JS via CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!-- JS plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 To disable this and load plugin assets manually simple add data-plugins-manual=true to the body tag -->


<!--Custom scripts & AppStrap API integration -->
<script src="{{secure_asset('assets/js/custom-script.js')}}"></script>
<!--AppStrap scripts mainly used to trigger libraries/plugins -->
<script src="{{secure_asset('assets/js/script.min.js')}}"></script>
<script src="{{secure_asset('assets/js/post-to-api.js')}}"></script>

<script src="{{asset('assets/js/custom-script.js')}}"></script>
<!--AppStrap scripts mainly used to trigger libraries/plugins -->
<script src="{{asset('assets/js/script.min.js')}}"></script>
<script src="{{asset('assets/js/post-to-api.js')}}"></script>
@if (session('success_message'))
    <x-notification-success
        :redirect="true"
        message-to-display="{{ (session('success_message')) }}"
    />
@endif

@if (session('error_message'))
    <x-notification-success
        type="error"
        :redirect="true"
        message-to-display="{{ (session('error_message')) }}"
    />
@endif

<livewire:scripts />
</body>
</html>
