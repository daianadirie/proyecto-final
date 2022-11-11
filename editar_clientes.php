<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Editar Clientes | Proyecto Final</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    
    <body data-layout="horizontal" data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="usuarios.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.svg" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Proyecto Final</span>
                                </span>
                            </a>

                            <a href="usuarios.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.svg" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Proyecto Final</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item" data-bs-toggle="collapse" id="horimenu-btn" data-bs-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="topnav">
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
        
                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle arrow-none" href="index.html" id="topnav-dashboard" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-home-circle icon"></i>
                                                <span data-key="t-dashboard">Inicio</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle arrow-none" href="usuarios.html" id="topnav-dashboard" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="user"></i>
                                                <span data-key="t-dashboard">Usuarios</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle arrow-none" href="index.html" id="topnav-dashboard" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="user"></i>
                                                <span data-key="t-dashboard">Clientes</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>

                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.jpg"
                                alt="Header Avatar">
                                <span class="ms-2 d-none d-xl-inline-block user-item-desc">
                                    <span class="user-name">Marie N. <i class="mdi mdi-chevron-down"></i></span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <h6 class="dropdown-header">Welcome Marie N!</h6>
                                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Perfil</span></a>
                                <a class="dropdown-item" href="auth-signout-cover.html"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Cerrar Sesión</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </header>

            <div class="hori-overlay"></div>
    


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header justify-content-between d-flex align-items-center">
                                        <h4 class="card-title">Editar Cliente</h4>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Nombre</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Apellido</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="mb-3 row">
                                                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="email" value="" id="example-email-input">
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">DNI</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="row mb-3 mt-3 mt-xl-0">
                                                    <label for="example-date-input" class="col-md-2 col-form-label">Fecha de Nacimiento</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="date" value="" id="example-date-input">
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="row mb-3">
                                                    <label class="col-md-2 col-form-label">Estado Civil</label>
                                                    <div class="col-md-10">
                                                        <select class="form-select">
                                                            <option>Seleccione</option>
                                                            <option>Large select</option>
                                                            <option>Small select</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="row mb-3">
                                                    <label class="col-md-2 col-form-label">Estado</label>
                                                    <div class="col-md-10">
                                                        <select class="form-select">
                                                            <option>Seleccione</option>
                                                            <option>Large select</option>
                                                            <option>Small select</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="mt-4">
                                                    <button type="submit" class="btn btn-warning">Editar</button>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                      
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Vuesy.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://1.envato.market/themesdesign" target="_blank">Themesdesign</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
