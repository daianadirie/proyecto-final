<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Iniciar Sesión | Proyecto Final</title>
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

    <body class="bg-white">

        <div class="auth-page d-flex align-items-center min-vh-100">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-4 col-md-5">
                            <div class="d-flex flex-column h-100 py-5 px-4">
                                <div class="text-center text-muted mb-2">
                                    <div class="pb-3">
                                        <a href="bienvenido.html">
                                            <span class="logo-lg">
                                                <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Proyecto Final</span>
                                            </span>
                                        </a>
                                        <p class="text-muted font-size-15 w-75 mx-auto mt-3 mb-0">Laboratorio de Compuntación IV</p>
                                    </div>
                                </div>
        
                                <div class="my-auto">
                                    <div class="p-3 text-center">
                                        <img src="assets/images/auth-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
        
                                <!--<div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© Este proyecto creado por <i class="mdi mdi-heart text-danger"></i> <a href="">Daiana Dirie</a></p>
                                </div>-->
                            </div>
                        
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
    
                    <div class="col-xxl-9 col-lg-8 col-md-7">
                        <div class="auth-bg bg-light py-md-5 p-4 d-flex">
                            <div class="bg-overlay-gradient"></div>
                            <!-- end bubble effect -->
                            <div class="row justify-content-center g-0 align-items-center w-100">
                                <div class="col-xl-4 col-lg-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="px-3 py-3">
                                                <div class="text-center">
                                                    <h5 class="mb-0">Bienvenido de nuevo!</h5>
                                                    <p class="text-muted mt-2">Inicia sesión para continuar.</p>
                                                </div>
                                                <form class="mt-4 pt-2">
                                                    <div class="form-floating form-floating-custom mb-3">
                                                        <input type="text" class="form-control" id="input-username" placeholder="Enter User Name">
                                                        <label for="input-username">Nombre de usuario</label>
                                                        <div class="form-floating-icon">
                                                            <i class="uil uil-users-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating form-floating-custom mb-3 auth-pass-inputgroup">
                                                        <input type="password" class="form-control" id="password-input" placeholder="Enter Password">
                                                        <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                            <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                        </button>
                                                        <label for="password-input">Contraseña</label>
                                                        <div class="form-floating-icon">
                                                            <i class="uil uil-padlock"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-primary font-size-16 py-1">
                                                        <input class="form-check-input" type="checkbox" id="remember-check">
                                                        <div class="float-end">
                                                        <a href="olvido_contrasena.html" class="text-muted text-decoration-underline font-size-14">Olvido su contraseña?</a>
                                                        </div>
                                                        <label class="form-check-label font-size-14" for="remember-check">
                                                            Recuerdame!
                                                        </label>
                                                    </div>
                
                                                    <div class="mt-3">
                                                        <button class="btn btn-primary w-100" type="submit">Iniciar Sesión</button>
                                                    </div>
            
                                                    <div class="mt-4 pt-3 text-center">
                                                        <p class="text-muted mb-0">No tienes una cuenta?<a href="registrarse.html" class="fw-semibold text-decoration-underline">Registrarse</a> </p>
                                                    </div>
                
                                                </form><!-- end form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>
        <!-- end authentication section -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

        <script src="assets/js/pages/pass-addon.init.js"></script>

    </body>
</html>
