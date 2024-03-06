<?php 
include ("../../app/config.php");
include ("../layout/parte1.php");
include ("../../app/controllers/roles/listado_de_roles.php");
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
                                            <li class="breadcrumb-item active">Listado de Roles</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h5 class="card-title mb-0 flex-grow-1">LISTADO DE ROLES</h5>
                                        <a href="create.php" class="btn btn-primary btn-label">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-add-circle-line label-icon align-middle fs-16 me-2"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Crear nuevo Rol
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div data-aos="fade-up" data-aos-duration="500">
                                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle table-hover" style="width:100%">
                                                <thead style="text-align: center;">
                                                    <tr>
                                                        <th data-ordering="false" style="text-align: center;">N°</th>
                                                        <th data-ordering="false">Nombre del Rol</th>
                                                        <th>Acciónes</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="text-align: center;">
                                                    <?php 
                                                        $contador_rol = 0;
                                                        foreach ($roles as $rol) {
                                                            $id_rol = $rol["id_rol"];
                                                            $contador_rol = $contador_rol + 1;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $contador_rol; ?></td>
                                                            <td style="text-align: left;"><?php echo $rol["nombre_rol"]; ?></td>
                                                            <td>
                                                                <div class="d-flex flex-wrap gap-1 mb-3 mb-lg-0 justify-content-center">
                                                                    <a href="#" class="btn btn-sm btn-primary btn-label">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <i class="ri-eye-line label-icon align-middle fs-15 me-2"></i>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                Ver
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="#" class="btn btn-sm btn-success btn-label">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <i class="ri-edit-line label-icon align-middle fs-15 me-2"></i>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                Editar
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="#" class="btn btn-sm btn-danger btn-label">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <i class="ri-delete-bin-6-line label-icon align-middle fs-15 me-2"></i>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                Borrar
                                                                            </div>
                                                                        </div>
                                                                    </a>  
                                                                </div>    
                                                            </td>
                                                        </tr>
                                                    <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>
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