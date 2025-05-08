<?php
$resources_url	= "/resources/opus/ds/";
$aic_base_url	= "/aiceo/";
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
            <h1>Members List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Members List</li>
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
                <h3 class="card-title">We have records of members&nbsp;</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>Photo</th>
                    <th>Full Name</th>
                    <th>Email</th>
					<th>Approval</th>
					<th>Userlevel</th>
					<th>job</th>
					<th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>

<?php
foreach ($all_members as $almembers) :
?>
                  <tr>
					<td><?php if (!$almembers->file_name1) { ?><img src="<?php echo $resources_url;?>member_image/NO_IMG_600x600.png" width="80" height="80"><?php } else {?><img src="http://localhost/member_image/<?php echo $almembers->file_name1;?>" width="80" height="80"><?php }?></td>
                    <td><?php echo $almembers->lastname;?>, <?php echo $almembers->firstname;?></td>
                    <td><?php echo $almembers->email;?></td>
                    <td><?php echo $almembers->status;?></td>
                    <td><?php echo $almembers->userlevel;?></td>
                    <td><?php echo $almembers->job;?></td>
					<td><a href="/aiceo/updateMember/<?php echo $almembers->uno;?>" class="btn btn-block btn-info btn-sm" role="button" aria-pressed="true">Update</a></td>
                  </tr>
<?php
endforeach
?>

                  </tbody>
                  <tfoot>
                  <tr>
					<th>Photo</th>
                    <th>Full Name</th>
                    <th>Email</th>
					<th>Approval</th>
					<th>Userlevel</th>
					<th>job</th>
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
