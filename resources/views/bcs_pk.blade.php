<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BCS | Pakistan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/23fdaa2d01.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;

            }
            #header{
                background-image: url('{{asset('media/imgs/topbanner.png')}}');
                min-height: 200px;
                background-size: cover;
                /*opacity: 0.7;*/
                background-repeat: no-repeat;
            }

            #form-section img{
                width: 600px;
                top: 0px;
                right: 50px;
                position: relative;
            }
            #businessimage{
                background-image: url('{{asset('media/imgs/Businesswoman_Laptop.png')}}');
                background-size: cover;
                height: 480px;
                background-repeat: no-repeat;
            }
            #farigstudents{
                background-image: url('{{asset('media/imgs/nextsection.png')}}');
                background-size: cover;
                background-repeat: no-repeat;
                opacity: 0.5;
            }
            .top-left{
                padding-left: 20px;
            }
            .top-left h1{
                font-weight: 800;
                /*margin-left: 130px;*/
            }
            h1,h2,h3,h5,h6{
                font-weight: 800;
            }
            #footer{
                background-color: rgb(47 46 46);
                color: #fff;
            }
            #footer i{
                font-size: 20px;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container-fluid" id="header">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 ml-4 pt-4">
                    <img src="{{asset('media/imgs/bcs_logo.png')}}" class="img-fluid" alt="" srcset="" width="300px">
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color: rgb(186, 218, 85);">
            <br/>
            <div class="container" id="form-section">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="top-left"><h1 class="text-white">Leave us a message and we'll get back<br/> to you.</h1></div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-none d-sm-block" id="businessimage"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card" style="width: 90%; margin: auto; background-color: rgb(186, 218, 85);">
                            <!-- <div class="card-header">
                                <h3 class="card-title">Leave a Message</h3>
                            </div> -->
                            <div class="card-body">
                                <form action="{{url('submit-membership')}}" method="post">
                                    @csrf
                                    @if(Session::has("success"))
                                        <div class="alert alert-success alert-dismissible">{{Session::get('success')}}</div>
                                    @elseif(Session::has("failed"))
                                        <div class="alert alert-danger alert-dismissible">{{Session::get('failed')}}</div>
                                    @elseif(Session::has("error"))
                                        <div class="alert alert-danger alert-dismissible">{{Session::get('error')}}</div>
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label for="first-name">First Name</label>
                                            <input type="text" name="first_name" required id="" class="form-control"><br/>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label for="last-name">Last Name</label>
                                            <input type="text" name="last_name" required id="" class="form-control"><br/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" required id="" class="form-control"><br/>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" required id="phone" class="form-control"><br/>
                                        </div>
                                    </div>
                                    <!-- <label for="subject">Subject</label>
                                    <input type="text" name="subject" id="" class="form-control"><br/> -->
                                    <label for="message">Type your message</label>
                                    <textarea name="message" id="" cols="10" rows="4" class="form-control"></textarea><br/>
                                    <button type="submit" class="btn btn-md btn-success btn-block"><i class="fa fa-send"></i> Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br/>
            <div class="container" style="background-color:#fff">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 20px;">
                    <h1 style="font-weight: 800;">Certifications for IT<br/> professionals</h1><br/>
                        <h4 style="line-height: 35px;">
                            Develop your IT skills with a BCS <br/> qualification; improve and validate<br/> your competence and the value<br/> you bring to your organisation.
                        </h4><br/>
                        <h3>
                            What are the benefits<br/> of a BCS qualification?
                        </h3>
                        <p><br/>
                        You’ll find our qualifications delivered and recognised in more<br/> than 200 countries around the world so you really can go<br/>further when you’re BCS certified!
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6" id="farigstudents">
                    </div>
                </div>
            </div><br/>
        </div>
        <div class="container-fluid" id="footer"><br/>
            <div class="row" style="width: 90%; margin:auto">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img src="{{asset('media/imgs/bcs_logo_white.png')}}" style="width: 60%" alt="white bcs logo" srcset="">
                    <br/><br/>
                    <p class="lead">
                        Building Quality and Integrity One Nation at a Time
                    </p><br/>
                    <div class="row">
                        <div class="col"><i class="fa fa-facebook"></i></div>
                        <div class="col"><i class="fa fa-twitter"></i></div>
                        <div class="col"><i class="fa fa-instagram"></i></div>
                        <div class="col"><i class="fa fa-linkedin"></i></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div><br/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6x">
                    <h3>Contact Info</h3>
                    <ul class="list-unstyled" style="line-height: 45px;">
                        <li>
                            <i class="fa fa-location-dot"></i> UK: 115 Suton Road, Birmingham, B23 6RP
                        </li>
                        <li>
                            <i class="fa fa-location-dot"></i> Pakistan: 18 F/1, Block 6, PECHS, Karachi, 75400
                        </li>
                        <li>
                            <i class="fa fa-send"></i> info@accerdination.co.uk
                        </li>
                        <li>
                            <i class="fa fa-phone"></i> +44(0)800 058 2509
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    </body>
</html>
