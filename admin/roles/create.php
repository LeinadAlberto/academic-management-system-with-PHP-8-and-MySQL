<?php 
include ("../../app/config.php");
include ("../layout/parte1.php");
?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Roles</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Roles</a></li>
                                            <li class="breadcrumb-item active">Crear Rol</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-3"></div>
                            
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">CREAR NUEVO ROL</h4>
                                    </div><!-- /.card-header -->
                                    
                                    <div class="card-body">
                                        <div data-aos="fade-down" data-aos-duration="500">
                                            <form action="<?php echo APP_URL; ?>/app/controllers/roles/create.php" method="post">
                                                <div class="row g-3">
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" id="firstnamefloatingInput" name="nombre_rol" placeholder="Ingrese nombre de rol" required>
                                                            <label for="firstnamefloatingInput">Nombre de Rol</label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                                            <a href="<?php echo APP_URL; ?>/admin/roles" class="btn btn-danger">Cancelar</a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.col-8 -->

                            <div class="col-3"></div>
                        </div>
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                SGE - <script>document.write(new Date().getFullYear())</script>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Desarrollado por Daniel Canaviri Mena
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
<?php 
include ("../layout/parte2.php");
include ("../../layout/mensajes.php");
?>