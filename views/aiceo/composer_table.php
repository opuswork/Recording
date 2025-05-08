<?php
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
            <h1>Composers List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Composers List</li>
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
                <h3 class="card-title">We have records of Composers&nbsp;<a href="/aiceo/addComposer" class="btn btn-block btn-info btn-sm" role="button" aria-pressed="true">Add Composer information</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					          <th>uno</th>
                    <th>Photo</th>
                    <th>Composer Name</th>
                    <th>url Slug</th>
                    <th>Birth</th>
                    <th>Death</th>
                    <th>Nationality</th>
                    <th>Profile</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>

<?php
foreach ($all_composers as $comps) :
?>
                  <tr>
					          <td><?php echo $comps->uno;?></td>
                    <td><?php if (!isset($comps->file_name1) || $comps->file_name1 == '') {?><img src="<?php echo $resources_performer_pic;?>ds/comp_image/NO_IMG_600x600.png" width="80" height="80"><?php }else{?><img src="<?php echo $resources_performer_pic;?>ds/comp_image/<?php echo $comps->file_name1;?>" width="80" height="80"><?php }?></td>
                    <td><?php echo $comps->last_name;?>, <?php echo $comps->first_name;?></td>
                    <td><?php echo $comps->url_slug;?></td>
                    <td><?php echo $comps->birth_date;?></td>
                    <td><?php echo $comps->death_date;?></td>
                    <td><?php echo $comps->nation;?></td>
                    <td><?php if ($comps->content) { echo "Y"; }else{ echo "N"; }?></td>
					<td><a href="/aiceo/updateComp/<?php echo $comps->uno;?>" class="btn btn-block btn-info btn-sm" role="button" aria-pressed="true">Update</a></td>
					<td><a href="<?php echo site_url('aiceo/deleteComp/'.$comps->uno);?>" class="btn btn-block btn-info btn-sm" role="button" aria-pressed="true">Delete</a></td>
                  </tr>
<?php
endforeach
?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>uno</th>
                    <th>Photo</th>
                    <th>Composer Name</th>
                    <th>url Slug</th>
                    <th>Birth</th>
                    <th>Death</th>
                    <th>Nationality</th>
                    <th>Profile</th>
                    <th>Edit</th>
                    <th>Delete</th>
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
