<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard- Admin</title>
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.tiny.cloud/1/z4in7uz0eb1f4ce7zzbfsfwyqdr301cpag1b1xvraoa95glf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            .icon-red{
                color:red!important;
            }
        </style>
    </head>
    @if (!Session::has('adminSess'))
        <script>
            window.location.href="{{route('adminLogin')}}";
        </script>
    @endif
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-white">
            <a class="navbar-brand icon-red" href="#">Admin</a>
            <button class="btn btn-link btn-lg" id="sidebarToggle" href="#"><i class="fas fa-bars icon-red"></i></button>
            <!-- Navbar Search-->
            <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li style="list-style: none"><a href="{{route('adminLogout')}}" class="btn btn-danger">Logout</a></li>
            </div>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link text-danger" href="{{route('admin')}}">
                                <div class="sb-nav-link-icon" ><i class="fas fa-tachometer-alt icon-red"></i></div>
                                Home
                            </a>

                            <a class="nav-link text-danger" href="{{route('ShowStudentBatch')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-code icon-red"></i></div>
                                Add Batch
                            </a>

                            <a class="nav-link text-danger" href="{{route('ShowStudentCourse')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-image icon-red"></i></div>
                                Add Course
                            </a>

                            <a class="nav-link text-danger" href="{{route('ShowStudentClass')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-video icon-red"></i></div>
                               Add Class
                            </a>

                            <a class="nav-link text-danger" href="{{route('ShowStudentSection')}}">
                                <div class="sb-nav-link-icon "><i class="fas fa-file icon-red"></i></div>
                                Add Section
                            </a>

                            <a class="nav-link text-danger" href="{{route('adminStudent')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user icon-red"></i></div>
                                 Student Details
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                @yield('mainContent')
            </div>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/demo/datatables-demo.js')}}"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>

        {{-- <script>
            tinymce.init({
            selector: 'textarea',
            plugins: 'media mediaembed',
            mediaembed_service_url: 'SERVICE_URL',
            mediaembed_max_width: 450
            });
        </script> --}}


        <script>
            jQuery(document).ready(function(){
                jQuery('#class').change(function(){
                    let cid=jQuery(this).val();
                    jQuery.ajax({
                        url:'/updateSection',
                        type:'post',
                        data:'cid='+cid+'&_token={{csrf_token()}}',
                        success:function(result){
                            jQuery('#section').html(result)
                        }
                    });
                });

            });
        </script>

    </body>
</html>

