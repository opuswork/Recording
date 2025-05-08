<?php
$resources_url	= "/resources/aic/";
$aic_base_url	= "/aiceo/";
?>


  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo $today = date("Y");?> AICEO, Opuscore&reg; Entertainment Group.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Aiceo Version</b> 1.0 aoi
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo $resources_url;?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $resources_url;?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo $resources_url;?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $resources_url;?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $resources_url;?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $resources_url;?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- bs-custom-file-input -->
<script src="<?php echo $resources_url;?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $resources_url;?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes <script>dist/js/demo.js"></script>-->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<!-- InputMask -->
<script src="<?php echo $resources_url;?>plugins/moment/moment.min.js"></script>
<script src="<?php echo $resources_url;?>plugins/inputmask/jquery.inputmask.min.js"></script>
<script>
  $(function () {
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
  })
</script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo $resources_url;?>plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo $resources_url;?>dist/js/pages/dashboard3.js"></script>
</body>
</html>
