



<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Banaba Tech.</h2>
                    @if(App::isLocale('en'))
                        <p>{{setting('site.introduction_en')}}</p>
                    @else
                        <p>{{setting('site.introduction_vi')}}</p>
                    @endif

                </div>
{{--                <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">--}}
{{--                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>--}}
{{--                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>--}}
{{--                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>--}}
{{--                </ul>--}}
            </div>
            <div class="col-md-2">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Quick Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('about')}}" class="py-2 d-block">About</a></li>
{{--                        <li><a href="#" class="py-2 d-block">Features</a></li>--}}
{{--                        <li><a href="#" class="py-2 d-block">Projects</a></li>--}}
{{--                        <li><a href="#" class="py-2 d-block">Blog</a></li>--}}
                        <li><a href="{{route('contact')}}" class="py-2 d-block">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 pr-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Recent Awards</h2>
                    <!--              <div class="block-21 mb-4 d-flex">-->
                    <!--                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>-->
                    <!--                <div class="text">-->
                    <!--                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>-->
                    <!--                  <div class="meta">-->
                    <!--                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>-->
                    <!--                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>-->
                    <!--                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>-->
                    <!--                  </div>-->
                    <!--                </div>-->
                    <!--              </div>-->
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url({{asset('images/image_2.jpg')}});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">{{trans('index.award')}}</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span>November 15, 2015</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Contact Info</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">{{setting('site.address')}}</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{setting('site.phone')}}</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@banabatech.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by <a href="#" target="_blank">Banaba Tech Ltd., Co.</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('js/google-map.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        var pathname = window.location.pathname;
        $('.nav > li > a[href="'+pathname+'"]').parent().addClass('active');
    })
</script>
@if ($errors->any())
<script type="text/javascript">
    $(window).on('load',function(){
        $('#modalRequest').modal('show');
    });
</script>
    @endif
@if(\Session::has('success'))
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#exampleModal').modal('show');
        });
    </script>
@endif
<script type="text/javascript" >
{{--    $(document).ready(function() {--}}
{{--        var $el, $ps, $up, totalHeight;--}}

{{--        $(".readmore-box .button").click(function () {--}}
{{--            console.log("test")--}}
{{--            totalHeight = 0--}}

{{--            $el = $(this);--}}
{{--            $p = $el.parent();--}}
{{--            $up = $p.parent();--}}
{{--            $ps = $up.find("p:not('.read-more')");--}}

{{--            // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)--}}
{{--            $ps.each(function () {--}}
{{--                totalHeight += $(this).outerHeight();--}}
{{--            });--}}

{{--            $up--}}
{{--                .css({--}}
{{--                    // Set height to prevent instant jumpdown when max height is removed--}}
{{--                    "height": $up.height(),--}}
{{--                    "max-height": 9999--}}
{{--                })--}}
{{--                .animate({--}}
{{--                    "height": totalHeight--}}
{{--                });--}}

{{--            // fade out read-more--}}
{{--            // $p.fadeOut();--}}
{{--            $('.readmore-box .button').fadeOut();--}}
{{--            commit();--}}
{{--            // prevent jump-down--}}
{{--            return false;--}}

{{--        });--}}
{{--    });--}}
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
    $(document).ready(function () {
        $(".content").hide();
        $(".show_hide").on("click", function () {
            var txt = $(".content").is(':visible') ? 'Read More...' : 'Read Less';
            console.log("test")
            $(".show_hide").text(txt);
            $(this).prev('.content').slideToggle(200);
        });
    });
}

</script>
