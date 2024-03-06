<?php 
    if ( isset($_SESSION["mensaje"]) && isset($_SESSION["icono"]) && isset($_SESSION["timer"])) {
        $mensaje = $_SESSION["mensaje"];
        $icono = $_SESSION["icono"];
        $timer = $_SESSION["timer"];
?>
        <script>
                Swal.fire({
                    position: "center",
                    icon: "<?php echo $icono; ?>",
                    title: "<?php echo $mensaje; ?>",
                    showConfirmButton: !1,
                    timer: "<?php echo $timer; ?>",
                    showCloseButton: !0
                });
        </script>
<?php
        unset($_SESSION["mensaje"]);
        unset($_SESSION["icono"]);
    }
?>