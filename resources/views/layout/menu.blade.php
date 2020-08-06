<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Banaba Tech Co., Ltd.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">

            <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{(strpos(Route::currentRouteName(), 'home')===0) ? 'active' : ''}} "><a href="{{route('home')}} "class="nav-link">Home</a></li>
                    <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}" ><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item  {{ (request()->is('services')) ? 'active' : '' }}"><a href="{{route('services')}}" class="nav-link">Services</a></li>
                <!--	          <li class="nav-item"><a class="nav-link" href="">Work</a></li>-->
                <li class="nav-item {{ (request()->is('team')) ? 'active' : '' }}"><a href="{{route('team')}}" class="nav-link">Team</a></li>
                <!--	          <li class="nav-item"><a href="pricing" class="nav-link">Pricing</a></li>-->
                <!--	          <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>-->
                <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                <li class="nav-item cta"><a href="" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Get a Quote</span></a></li>
            </ul>

        </div>
    </div>

</nav>
<script>
    $(document).ready(function() {

        var pathname = window.location.pathname;
        $('.nav > li > a[href="'+pathname+'"]').parent().addClass('active');
    })
</script>
</body>
</html>