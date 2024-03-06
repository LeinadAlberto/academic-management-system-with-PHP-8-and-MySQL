<?php 
session_start(); 
if ( isset($_SESSION["sesion_email"]) ) {
    $sesion_email = $_SESSION["sesion_email"];
    /* echo "El usuario paso por el login"; */
    $query_sesion = $pdo->prepare("SELECT * FROM usuarios WHERE email = '$sesion_email' AND estado = '1'");
    $query_sesion->execute();

    $datos_sesion_usuarios = $query_sesion->fetchAll(PDO::FETCH_ASSOC);
    foreach ($datos_sesion_usuarios as $datos_sesion_usuario) {
        $nombre_sesion_usuario = $datos_sesion_usuario["nombres"]; 
    }
} else {
    /* echo "El usuario no paso por el login"; */
    header("Location:" . APP_URL . "/login");
}
?>
<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

    <head>
        <meta charset="utf-8" />
        <title><?php echo APP_NAME; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo APP_URL; ?>/public/assets/images/favicon.ico">
        <!-- aos css -->
        <link rel="stylesheet" href="<?php echo APP_URL; ?>/public/assets/libs/aos/aos.css" />
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
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box horizontal-logo">
                                <a href="<?php echo APP_URL; ?>/admin" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="<?php echo APP_URL; ?>/public/assets/images/logo-sm.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="<?php echo APP_URL; ?>/public/assets/images/logo-dark.png" alt="" height="17">
                                    </span>
                                </a>

                                <a href="<?php echo APP_URL; ?>/admin" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="<?php echo APP_URL; ?>/public/assets/images/logo-sm.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="<?php echo APP_URL; ?>/public/assets/images/logo-light.png" alt="" height="17">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                                id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>

                            <!-- App Search-->
                            <form class="app-search d-none d-md-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                        id="search-options" value="">
                                    <span class="mdi mdi-magnify search-widget-icon"></span>
                                    <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                        id="search-close-options"></span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                    <div data-simplebar style="max-height: 320px;">
                                        <!-- item-->
                                        <div class="dropdown-header">
                                            <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                        </div>

                                        <div class="dropdown-item bg-transparent text-wrap">
                                            <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i
                                                    class="mdi mdi-magnify ms-1"></i></a>
                                            <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i
                                                    class="mdi mdi-magnify ms-1"></i></a>
                                        </div>
                                        <!-- item-->
                                        <div class="dropdown-header mt-2">
                                            <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                            <span>Analytics Dashboard</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                            <span>Help Center</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                            <span>My account settings</span>
                                        </a>

                                        <!-- item-->
                                        <div class="dropdown-header mt-2">
                                            <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="<?php echo APP_URL; ?>/public/assets/images/users/avatar-2.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">Angela Bernier</h6>
                                                        <span class="fs-11 mb-0 text-muted">Manager</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="<?php echo APP_URL; ?>/public/assets/images/users/avatar-3.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">David Grasso</h6>
                                                        <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="<?php echo APP_URL; ?>/public/assets/images/users/avatar-5.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">Mike Bunch</h6>
                                                        <span class="fs-11 mb-0 text-muted">React Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="text-center pt-3 pb-1">
                                        <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i
                                                class="ri-arrow-right-line ms-1"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="d-flex align-items-center">

                            <div class="dropdown d-md-none topbar-head-dropdown header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="bx bx-search fs-22"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                    aria-labelledby="page-header-search-dropdown">
                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..."
                                                    aria-label="Recipient's username">
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="dropdown ms-1 topbar-head-dropdown header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img id="header-lang-img" src="<?php echo APP_URL; ?>/public/assets/images/flags/us.svg" alt="Header Language" height="20"
                                        class="rounded">
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en"
                                        title="English">
                                        <img src="<?php echo APP_URL; ?>/public/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">English</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp"
                                        title="Spanish">
                                        <img src="<?php echo APP_URL; ?>/public/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">Española</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr"
                                        title="German">
                                        <img src="<?php echo APP_URL; ?>/public/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded"
                                            height="18"> <span class="align-middle">Deutsche</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it"
                                        title="Italian">
                                        <img src="<?php echo APP_URL; ?>/public/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">Italiana</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru"
                                        title="Russian">
                                        <img src="<?php echo APP_URL; ?>/public/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">русский</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch"
                                        title="Chinese">
                                        <img src="<?php echo APP_URL; ?>/public/assets/images/flags/china.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">中国人</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr"
                                        title="French">
                                        <img src="<?php echo APP_URL; ?>/public/assets/images/flags/french.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">français</span>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-category-alt fs-22'></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                                    <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fw-semibold fs-15"> Web Apps </h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="btn btn-sm btn-soft-info"> View All Apps
                                                    <i class="ri-arrow-right-s-line align-middle"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-2">
                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="<?php echo APP_URL; ?>/public/assets/images/brands/github.png" alt="Github">
                                                    <span>GitHub</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="<?php echo APP_URL; ?>/public/assets/images/brands/bitbucket.png" alt="bitbucket">
                                                    <span>Bitbucket</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="<?php echo APP_URL; ?>/public/assets/images/brands/dribbble.png" alt="dribbble">
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="<?php echo APP_URL; ?>/public/assets/images/brands/dropbox.png" alt="dropbox">
                                                    <span>Dropbox</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="<?php echo APP_URL; ?>/public/assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                    <span>Mail Chimp</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="<?php echo APP_URL; ?>/public/assets/images/brands/slack.png" alt="slack">
                                                    <span>Slack</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-shopping-bag fs-22'></i>
                                    <span
                                        class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart"
                                    aria-labelledby="page-header-cart-dropdown">
                                    <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                                            </div>
                                            <div class="col-auto">
                                                <span class="badge badge-soft-warning fs-13"><span class="cartitem-badge">7</span>
                                                    items</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar style="max-height: 300px;">
                                        <div class="p-2">
                                            <div class="text-center empty-cart" id="empty-cart">
                                                <div class="avatar-md mx-auto my-3">
                                                    <div class="avatar-title bg-soft-info text-info fs-36 rounded-circle">
                                                        <i class='bx bx-cart'></i>
                                                    </div>
                                                </div>
                                                <h5 class="mb-3">Your Cart is Empty!</h5>
                                                <a href="apps-ecommerce-products.html" class="btn btn-success w-md mb-3">Shop Now</a>
                                            </div>
                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="<?php echo APP_URL; ?>/public/assets/images/products/img-1.png"
                                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="apps-ecommerce-product-details.html" class="text-reset">Branded
                                                                T-Shirts</a>
                                                        </h6>
                                                        <p class="mb-0 fs-12 text-muted">
                                                            Quantity: <span>10 x $32</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button"
                                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                                class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="<?php echo APP_URL; ?>/public/assets/images/products/img-2.png"
                                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="apps-ecommerce-product-details.html"
                                                                class="text-reset">Bentwood Chair</a>
                                                        </h6>
                                                        <p class="mb-0 fs-12 text-muted">
                                                            Quantity: <span>5 x $18</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button"
                                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                                class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="<?php echo APP_URL; ?>/public/assets/images/products/img-3.png"
                                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="apps-ecommerce-product-details.html" class="text-reset">
                                                                Borosil Paper Cup</a>
                                                        </h6>
                                                        <p class="mb-0 fs-12 text-muted">
                                                            Quantity: <span>3 x $250</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button"
                                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                                class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="<?php echo APP_URL; ?>/public/assets/images/products/img-6.png"
                                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="apps-ecommerce-product-details.html" class="text-reset">Gray
                                                                Styled T-Shirt</a>
                                                        </h6>
                                                        <p class="mb-0 fs-12 text-muted">
                                                            Quantity: <span>1 x $1250</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$ <span class="cart-item-price">1250</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button"
                                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                                class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="<?php echo APP_URL; ?>/public/assets/images/products/img-5.png"
                                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="apps-ecommerce-product-details.html"
                                                                class="text-reset">Stillbird Helmet</a>
                                                        </h6>
                                                        <p class="mb-0 fs-12 text-muted">
                                                            Quantity: <span>2 x $495</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button"
                                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                                class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border"
                                        id="checkout-elem">
                                        <div class="d-flex justify-content-between align-items-center pb-3">
                                            <h5 class="m-0 text-muted">Total:</h5>
                                            <div class="px-2">
                                                <h5 class="m-0" id="cart-item-total">$1258.58</h5>
                                            </div>
                                        </div>

                                        <a href="apps-ecommerce-checkout.html" class="btn btn-success text-center w-100">
                                            Checkout
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    data-toggle="fullscreen">
                                    <i class='bx bx-fullscreen fs-22'></i>
                                </button>
                            </div>

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button"
                                    class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                    <i class='bx bx-moon fs-22'></i>
                                </button>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class='bx bx-bell fs-22'></i>
                                    <span
                                        class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span
                                            class="visually-hidden">unread messages</span></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                    aria-labelledby="page-header-notifications-dropdown">

                                    <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                        <div class="p-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                                </div>
                                                <div class="col-auto dropdown-tabs">
                                                    <span class="badge badge-soft-light fs-13"> 4 New</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-2 pt-2">
                                            <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true"
                                                id="notificationItemsTab" role="tablist">
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab"
                                                        aria-selected="true">
                                                        All (4)
                                                    </a>
                                                </li>
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab"
                                                        aria-selected="false">
                                                        Messages
                                                    </a>
                                                </li>
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab"
                                                        aria-selected="false">
                                                        Alerts
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="tab-content" id="notificationItemsTabContent">
                                        <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                            <div data-simplebar style="max-height: 300px;" class="pe-2">
                                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                    <div class="d-flex">
                                                        <div class="avatar-xs me-3">
                                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                                                                <i class="bx bx-badge-check"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                                    Optimization <span class="text-secondary">reward</span> is
                                                                    ready!
                                                                </h6>
                                                            </a>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="all-notification-check01">
                                                                <label class="form-check-label"
                                                                    for="all-notification-check01"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-reset notification-item d-block dropdown-item position-relative active">
                                                    <div class="d-flex">
                                                        <img src="<?php echo APP_URL; ?>/public/assets/images/users/avatar-2.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                                    graph 🔔.</p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="all-notification-check02" checked>
                                                                <label class="form-check-label"
                                                                    for="all-notification-check02"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                    <div class="d-flex">
                                                        <div class="avatar-xs me-3">
                                                            <span
                                                                class="avatar-title bg-soft-danger text-danger rounded-circle fs-16">
                                                                <i class='bx bx-message-square-dots'></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b
                                                                        class="text-success">20</b> new messages in the conversation
                                                                </h6>
                                                            </a>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="all-notification-check03">
                                                                <label class="form-check-label"
                                                                    for="all-notification-check03"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                    <div class="d-flex">
                                                        <img src="<?php echo APP_URL; ?>/public/assets/images/users/avatar-8.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">We talked about a project on linkedin.</p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="all-notification-check04">
                                                                <label class="form-check-label"
                                                                    for="all-notification-check04"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="my-3 text-center">
                                                    <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                                        All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel"
                                            aria-labelledby="messages-tab">
                                            <div data-simplebar style="max-height: 300px;" class="pe-2">
                                                <div class="text-reset notification-item d-block dropdown-item">
                                                    <div class="d-flex">
                                                        <img src="<?php echo APP_URL; ?>/public/assets/images/users/avatar-3.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">We talked about a project on linkedin.</p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="messages-notification-check01">
                                                                <label class="form-check-label"
                                                                    for="messages-notification-check01"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-reset notification-item d-block dropdown-item">
                                                    <div class="d-flex">
                                                        <img src="<?php echo APP_URL; ?>/public/assets/images/users/avatar-2.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                                    graph 🔔.</p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="messages-notification-check02">
                                                                <label class="form-check-label"
                                                                    for="messages-notification-check02"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-reset notification-item d-block dropdown-item">
                                                    <div class="d-flex">
                                                        <img src="<?php echo APP_URL; ?>/public/assets/images/users/avatar-6.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">Mentionned you in his comment on 📃 invoice #12501.
                                                                </p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 10 hrs ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="messages-notification-check03">
                                                                <label class="form-check-label"
                                                                    for="messages-notification-check03"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-reset notification-item d-block dropdown-item">
                                                    <div class="d-flex">
                                                        <img src="<?php echo APP_URL; ?>/public/assets/images/users/avatar-8.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">We talked about a project on linkedin.</p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 3 days ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="messages-notification-check04">
                                                                <label class="form-check-label"
                                                                    for="messages-notification-check04"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="my-3 text-center">
                                                    <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                                        All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab">
                                            <div class="w-25 w-sm-50 pt-3 mx-auto">
                                                <img src="<?php echo APP_URL; ?>/public/assets/images/svg/bell.svg" class="img-fluid" alt="user-pic">
                                            </div>
                                            <div class="text-center pb-5 mt-2">
                                                <h6 class="fs-18 fw-semibold lh-base">Hey! You have no any notifications </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown ms-sm-3 header-item topbar-user">
                                <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img class="rounded-circle header-profile-user" src="<?php echo APP_URL; ?>/public/assets/images/users/user-dummy-img.jpg"
                                            alt="Header Avatar">
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">
                                                <?php echo $nombre_sesion_usuario; ?>
                                            </span>
                                            <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Founder</span>
                                        </span>
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <h6 class="dropdown-header">Welcome Anna!</h6>
                                    <a class="dropdown-item" href="pages-profile.html"><i
                                            class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle">Profile</span></a>
                                    <a class="dropdown-item" href="apps-chat.html"><i
                                            class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle">Messages</span></a>
                                    <a class="dropdown-item" href="apps-tasks-kanban.html"><i
                                            class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle">Taskboard</span></a>
                                    <a class="dropdown-item" href="pages-faqs.html"><i
                                            class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle">Help</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages-profile.html"><i
                                            class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle">Balance : <b>$5971.67</b></span></a>
                                    <a class="dropdown-item" href="pages-profile-settings.html"><span
                                            class="badge bg-soft-success text-success mt-1 float-end">New</span><i
                                            class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle">Settings</span></a>
                                    <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                                            class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle">Lock screen</span></a>
                                    <a class="dropdown-item" href="<?php echo APP_URL; ?>/login/logout.php"><i
                                            class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle" data-key="t-logout">Logout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="<?php echo APP_URL; ?>/admin" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?php echo APP_URL; ?>/public/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?php echo APP_URL; ?>/public/assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="<?php echo APP_URL; ?>/admin" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="<?php echo APP_URL; ?>/public/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?php echo APP_URL; ?>/public/assets/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    <div class="container-fluid">

                        <div id="two-column-menu">
                        </div>

                        <ul class="navbar-nav" id="navbar-nav">

                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                            <!-- ROLES -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarRoles" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarRoles">
                                    <i class="ri-contacts-line"></i> <span>Roles</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarRoles">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="<?php echo APP_URL; ?>/admin/roles" class="nav-link"> Listado de Roles </a>
                                        </li>
                                    </ul>
                                </div>
                            </li><!-- END MENU ROLES -->

                            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                                    <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Authentication</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAuth">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn" data-key="t-signin"> Sign In
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarSignIn">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-signin-basic.html" class="nav-link" data-key="t-basic"> Basic
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-signin-cover.html" class="nav-link" data-key="t-cover"> Cover
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup"> Sign Up
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarSignUp">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-signup-basic.html" class="nav-link" data-key="t-basic"> Basic
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-signup-cover.html" class="nav-link" data-key="t-cover"> Cover
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarResetPass" data-key="t-password-reset">
                                                Password Reset
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarResetPass">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-pass-reset-basic.html" class="nav-link" data-key="t-basic">
                                                            Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-pass-reset-cover.html" class="nav-link" data-key="t-cover">
                                                            Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarchangePass" data-key="t-password-create">
                                                Password Create
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarchangePass">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-pass-change-basic.html" class="nav-link" data-key="t-basic">
                                                            Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-pass-change-cover.html" class="nav-link" data-key="t-cover">
                                                            Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLockScreen" data-key="t-lock-screen">
                                                Lock Screen
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-lockscreen-basic.html" class="nav-link" data-key="t-basic">
                                                            Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-lockscreen-cover.html" class="nav-link" data-key="t-cover">
                                                            Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLogout" data-key="t-logout"> Logout
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarLogout">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-logout-basic.html" class="nav-link" data-key="t-basic"> Basic
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-logout-cover.html" class="nav-link" data-key="t-cover"> Cover
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSuccessMsg" data-key="t-success-message"> Success Message
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-success-msg-basic.html" class="nav-link" data-key="t-basic">
                                                            Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-success-msg-cover.html" class="nav-link" data-key="t-cover">
                                                            Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTwoStep" data-key="t-two-step-verification"> Two Step Verification
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-twostep-basic.html" class="nav-link" data-key="t-basic"> Basic
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-twostep-cover.html" class="nav-link" data-key="t-cover"> Cover
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors"> Errors
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarErrors">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-404-basic.html" class="nav-link" data-key="t-404-basic"> 404
                                                            Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-404-cover.html" class="nav-link" data-key="t-404-cover"> 404
                                                            Cover </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-404-alt.html" class="nav-link" data-key="t-404-alt"> 404 Alt
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-500.html" class="nav-link" data-key="t-500"> 500 </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-offline.html" class="nav-link" data-key="t-offline-page"> Offline Page </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span></li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                                    <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-base-ui">Base UI</span>
                                </a>
                                <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">Alerts</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-badges.html" class="nav-link" data-key="t-badges">Badges</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-buttons.html" class="nav-link" data-key="t-buttons">Buttons</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-colors.html" class="nav-link" data-key="t-colors">Colors</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-cards.html" class="nav-link" data-key="t-cards">Cards</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-carousel.html" class="nav-link" data-key="t-carousel">Carousel</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-dropdowns.html" class="nav-link" data-key="t-dropdowns">Dropdowns</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-grid.html" class="nav-link" data-key="t-grid">Grid</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="ui-images.html" class="nav-link" data-key="t-images">Images</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-tabs.html" class="nav-link" data-key="t-tabs">Tabs</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-accordions.html" class="nav-link" data-key="t-accordion-collapse">Accordion & Collapse</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-modals.html" class="nav-link" data-key="t-modals">Modals</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-offcanvas.html" class="nav-link" data-key="t-offcanvas">Offcanvas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-placeholders.html" class="nav-link" data-key="t-placeholders">Placeholders</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-progress.html" class="nav-link" data-key="t-progress">Progress</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-notifications.html" class="nav-link" data-key="t-notifications">Notifications</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="ui-media.html" class="nav-link" data-key="t-media-object">Media
                                                        object</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-embed-video.html" class="nav-link" data-key="t-embed-video">Embed
                                                        Video</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-typography.html" class="nav-link" data-key="t-typography">Typography</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-lists.html" class="nav-link" data-key="t-lists">Lists</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-general.html" class="nav-link" data-key="t-general">General</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-ribbons.html" class="nav-link" data-key="t-ribbons">Ribbons</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-utilities.html" class="nav-link" data-key="t-utilities">Utilities</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="<?php echo APP_URL; ?>/login/logout.php" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                                    <i class="ri-door-open-line"></i> <span>Cerrar Sesión</span>
                                </a>
                                
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>

                <div class="sidebar-background"></div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>