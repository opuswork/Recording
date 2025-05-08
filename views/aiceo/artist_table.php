<?php
$resources_url	= "http://localhost/us/resources/aic/";
$aic_base_url	= "http://localhost/us/aiceo/";

$resources_performer_pic = "/resources/opus/";
$resources_url	= "/resources/aic/";
$aic_base_url	= "/resources/aiceo/";
?>
  
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $resources_url;?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $resources_url;?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Artists List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Artists List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">We have records of artists&nbsp;<a href="<?php echo $aic_base_url;?>addArtist" class="btn btn-block btn-info btn-sm" role="button" aria-pressed="true">Add Artist information</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>Photo</th>
                    <th>Artist Name</th>
                    <th>Nation</th>
					<th>Education</th>
					<th>Job</th>
					<th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>

<?php
foreach ($all_artist as $aartist) :
?>
                  <tr>
					<td><img src="<?php echo $resources_performer_pic;?>ds/artist_image/<?php echo $aartist->file_name1;?>" width="80" height="80"></td>
                    <td><?php echo $aartist->last_name;?>, <?php echo $aartist->first_name;?></td>
                    <td><?php echo $aartist->nation;?></td>
                    <td><?php echo $aartist->education;?></td>
                    <td><?php echo $aartist->job;?></td>
					<td><a href="/us/aiceo/updateArtist/<?php echo $aartist->uno;?>" class="btn btn-block btn-info btn-sm" role="button" aria-pressed="true">Update</a></td>
                  </tr>
<?php
endforeach
?>

                  </tbody>
                  <tfoot>
                  <tr>
					<th>Photo</th>
                    <th>Artist Name</th>
                    <th>Nation</th>
					<th>Education</th>
					<th>Job</th>
					<th>Edit</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- ./wrapper -->
<!-- AdminLTE App -->
<script src="<?php echo $resources_url;?>dist/js/adminlte.min.js"></script>

</body>
</html>
