<?php 
include ("../app/config.php");
session_start();
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

    <head>

        <meta charset="utf-8" />
        <title><?php echo APP_NAME; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo APP_URL; ?>/public/assets/images/favicon.ico">
        <!-- Sweet Alert css-->
        <link href="<?php echo APP_URL; ?>/public/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

        <!-- Layout config Js -->
        <script src="<?php echo APP_URL; ?>/public/assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="<?php echo APP_URL; ?>/public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo APP_URL; ?>/public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo APP_URL; ?>/public/assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="<?php echo APP_URL; ?>/public/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

        <!-- Sweet Alerts js -->
        <script src="<?php echo APP_URL; ?>/public/assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- Sweet alert init js-->
        <script src="<?php echo APP_URL; ?>/public/assets/js/pages/sweetalerts.init.js"></script>
    </head>

    <body>

        <!-- auth-page wrapper -->
        <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
            <div class="bg-overlay"></div>
            <!-- auth-page content -->
            <div class="auth-page-content overflow-hidden pt-lg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card overflow-hidden">
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <div class="p-lg-5 p-4 auth-one-bg h-100">
                                            <div class="bg-overlay"></div>
                                            <div class="position-relative h-100 d-flex flex-column">
                                                <div class="mb-4">
                                                    <a href="index.html" class="d-block">
                                                        <img src="<?php echo APP_URL; ?>/public/assets/images/logo-light.png" alt="" height="18">
                                                    </a>
                                                </div>
                                                <div class="mt-auto">
                                                    <div class="mb-3">
                                                        <i class="ri-double-quotes-l display-4 text-success"></i>
                                                    </div>

                                                    <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                        <div class="carousel-indicators">
                                                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                        </div>
                                                        <div class="carousel-inner text-center text-white-50 pb-5">
                                                            <div class="carousel-item active">
                                                                <p class="fs-15 fst-italic">" Explora tus opciones educativas con nosotros. "</p>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <p class="fs-15 fst-italic">" Mantente al tanto de tu progreso académico. "</p>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <p class="fs-15 fst-italic">" Tu herramienta integral para el éxito académico. "</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end carousel -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-lg-6">
                                        <div class="p-lg-5 p-4">
                                            <div>
                                                <h5 class="text-primary">Bienvenido</h5>
                                                <p class="text-muted">Inicia sesión para acceder al <b>Sistema de Gestion Escolar.</b></p>
                                            </div>

                                            <div class="mt-4">
                                                <form action="controller_login.php" method="post">

                                                    <div class="mb-3">
                                                        <!-- Nombre de Usuario -->
                                                        <label for="username" class="form-label">Correo Electrónico</label>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Introduzca su correo electrónico" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <div class="float-end">
                                                            <a href="auth-pass-reset-cover.html" class="text-muted">¿Has olvidado tu contraseña?</a>
                                                        </div>
                                                        <!-- Contraseña -->
                                                        <label class="form-label" for="password-input">Contraseña</label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input type="password" class="form-control pe-5 password-input" placeholder="Introduzca la contraseña" id="password" name="password" required>
                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        </div>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                        <label class="form-check-label" for="auth-remember-check">Acuérdate de mí</label>
                                                    </div>

                                                    <div class="mt-4">
                                                        <button class="btn btn-success w-100" type="submit">Iniciar sesión</button>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <div class="signin-other-title">
                                                            <h5 class="fs-13 mb-4 title">Inicia sesión con</h5>
                                                        </div>

                                                        <div>
                                                            <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                            <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                            <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                                        </div>
                                                    </div>

                                                </form>

                                                <?php 
                                                    if (isset($_SESSION["mensaje"])) {
                                                        $mensaje = $_SESSION["mensaje"];
                                                ?>
                                                        <script>
                                                                Swal.fire({
                                                                    position: "center",
                                                                    icon: "error",
                                                                    title: "<?php echo $mensaje; ?>",
                                                                    showConfirmButton: !1,
                                                                    timer: 2500,
                                                                    showCloseButton: !0
                                                                });
                                                        </script>
                                                <?php
                                                    session_destroy();
                                                    }
                                                ?>
                                            </div>

                                            <div class="mt-5 text-center">
                                                <p class="mb-0">¿No tienes una cuenta? <a href="auth-signup-cover.html" class="fw-semibold text-primary text-decoration-underline"> Registrarse</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end auth page content -->

            <!-- footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class="mb-0">&copy;
                                    <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- end auth-page-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="<?php echo APP_URL; ?>/public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo APP_URL; ?>/public/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo APP_URL; ?>/public/assets/libs/node-waves/waves.min.js"></script>
        <script src="<?php echo APP_URL; ?>/public/assets/libs/feather-icons/feather.min.js"></script>
        <script src="<?php echo APP_URL; ?>/public/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="<?php echo APP_URL; ?>/public/assets/js/plugins.js"></script>
        
        <!-- password-addon init -->
        <script src="<?php echo APP_URL; ?>/public/assets/js/pages/password-addon.init.js"></script>

        

       
    </body>

</html>