<?php
$resources_url	= "/resources/aic/";
$aic_base_url	= "/aiceo/";
$resources_album = "/resources/opus/ds/album_image/";
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
            <h1>Track List per Top Track of Each</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Track List per Top Track of Each</li>
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
                <h3 class="card-title">We have records of albums&nbsp;<a href="<?php echo $aic_base_url;?>addAlbum" class="btn btn-block btn-info btn-sm" role="button" aria-pressed="true">Add Album</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					          <th>Cover</th>
                    <th>Album Name</th>
                    <th>Catalogue Number</th>
                    <th>Song Title</th>
                    <th>Title Slug</th>
                    <th>Lyrics(*)</th>                    
					          <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>

<?php
foreach ($all_tracks as $atracks) :
  if ($atracks->lyrics) {
    $lyrics = "*";
  }else{
    $lyrics = "Empty";
  }

?>
                  <tr>
					          <td><img src="<?php echo $resources_album;?><?php echo $atracks->album_cover;?>" width="80" height="80"></td>
                    <td><?php echo $atracks->album_name;?></td>          
                    <td><?php echo $atracks->album_code;?></td>
                    <td><?php echo $atracks->track_title;?></td>
                    <td><?php echo $atracks->song_slug;?></td>
                    <td><?php echo $lyrics;?></td>
					          <td><a href="/aiceo/updateTrack/<?php echo $atracks->song_slug;?>" class="btn btn-block btn-info btn-sm" role="button" aria-pressed="true">Update</a></td>
                  </tr>
<?php
endforeach
?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Cover</th>
                    <th>Album Name</th>
                    <th>Catalogue Number</th>
                    <th>Song Title</th>
                    <th>Title Slug</th>
                    <th>Lyrics(*)</th>                    
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
