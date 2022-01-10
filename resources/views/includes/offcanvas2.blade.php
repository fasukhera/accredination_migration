<!--=====================================-->
<!--=         Offcanvas Start           =-->
<!--=====================================-->
<div class="offcanvas-menu-wrap" id="offcanvas-wrap" data-position="left">
    <div class="close-btn offcanvas-close"><i class="fas fa-times"></i></div>
    <div class="offcanvas-content">
        <div class="offcanvas-logo">
            <a href="index.html"><img src="{{asset('logo-black.png')}}" alt="logo"></a>
        </div>
        <nav>
            <ul class="offcanvas-nav">
                <li class="nav-item">
                    <a href="{{route('home')}}">Add New Certificate</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('certificate_details')}}">Add Certificate Details</a>
                </li>

                <li class="nav-item">
                    <a href="{{route('accordion')}}">Add Certificate Accordion</a>
                </li>

            </ul>
        </nav>
        <div class="offcanvas-footer">
            <div class="item-title">Follow Me</div>
            <ul class="offcanvas-social">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fas fa-rss"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!--=====================================-->
<!--=           Offcanvas End           =-->
<!--=====================================-->
