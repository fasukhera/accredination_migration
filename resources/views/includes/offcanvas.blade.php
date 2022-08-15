<!--=====================================-->
<!--=         Offcanvas Start           =-->
<!--=====================================-->
<style>
    #dropdown-name {
        background-color: white;
        color: black;
        padding: 16px;
        font-size: 25px;
        border: none;
        cursor: pointer;
    }

    #dropdown-content {
        position: absolute;
        background-color: #f9f9f9;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);


    }


    #dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;

    }

    #dropdown:hover #dropdown-content {

        display: block;
    }

    #dropdown1 {
        position: relative;
        text-align: center;
        bottom: 180px;

    }

    .dropdown-menu {
        margin-left: 250px;
    }

    .offcanvas-menu {
        text-align: center;
        color: black;
        padding-left: 16px;
        font-size: 25px;
    }

</style>

<div class="offcanvas-menu-wrap" id="offcanvas-wrap" data-position="left">
    <div class="close-btn offcanvas-close"><i class="fas fa-times"></i></div>
    <div class="offcanvas-content">
        <div class="offcanvas-logo">
            <a href="{{route('landing')}}"><img src="{{asset('logo-black.png')}}" alt="logo"></a>
        </div>
        <div class="">
            <nav id="dropdown1" class="template-main-menu1">
                <ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown-name" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown"><span>Certifications</span></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-top: 50px;"
                            id="dropdown-content">


                            @if(isset($certificates))
                            @foreach($certificates as $certificate)


                            <a
                                href="{{route('certificate',$certificate->name)}}"><span>{{$certificate->name}}</span></a>

                            @endforeach
                            @else
                            @foreach($data['certificates'] as $certificate)


                            <a
                                href="{{route('certificate',$certificate->name)}}"><span>{{$certificate->name}}</span></a>

                            @endforeach
                
                            @endif



                        </div>
                    </li>

                </ul>
                <ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown-name" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown"><span>Higher Education Qualifications</span></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown-content">


                            @if(isset($membership))
                            @foreach($membership as $memberships)


                            <a href="{{route('page',$memberships->name)}}"><span>{{$memberships->name}}</span></a>

                            @endforeach
                            @else
                            @foreach($data['membership'] as $memberships)


                            <a href="{{route('page',$memberships->name)}}"><span>{{$memberships->name}}</span></a>

                            @endforeach
                            @endif


                        </div>
                    </li>

                </ul>
                <ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown-name" href="{{route('send_email')}}" id="navbarDropdown"
                            role="button" data-toggle="dropdown"><span>Consulting</span></a>

                    </li>

                </ul>
            </nav>
        </div>
    </div>

    <div class="offcanvas-footer">
        <div class="item-title">Follow us</div>
        <ul class="offcanvas-social">
            <li><a href="https://www.facebook.com/accredination/"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/accredination/"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/accredination/"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/company/accredination/"><i class="fab fa-linkedin-in"></i></a>
            </li>

        </ul>
    </div>
</div>
</div>
<!--=====================================-->
<!--=           Offcanvas End           =-->
<!--=====================================-->
