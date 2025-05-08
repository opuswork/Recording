<?php
$resources_url	= "/resources/aic/";
$aic_base_url	= "/aiceo/";
$resources_album = "/resources/opus/ds/album_image/";
$album_code = $this->input->get('al_code');
$al_name = $this->input->get('al_name');
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
          <div class="col-sm-12">
            <h1>All Tracks for</h1>
            <h1>"<?php echo $al_name; ?>"</h1>
            <h1>[<?php echo $album_code;?>]</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Tracks for "<?php echo $al_name; ?>"</li>
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

            <div class="card col-12">
              <div class="card-header col-6">
                <h3 class="card-title">We have records of albums&nbsp;<a href="<?php echo $aic_base_url;?>addSingleTrack" class="btn btn-block btn-info btn-sm" role="button" aria-pressed="true">Add a single track for this recording</a></h3>
                <h3 class="card-title col-6"><a href="/aiceo/sound_track?menu=sound_track" class="btn btn-block btn-info btn-sm" role="button" aria-pressed="true">Up to parent directory</a></h3>  
              </div>
              <?php 
                #$vals = $this->uri->segment(3);
                #echo $this->input->post('$vals');
              ?>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>Cover</th>
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
					<td><img src="<?php echo $resources_album;?><?php echo $atracks->front_cover;?>" width="80" height="80"></td>
                    <td><?php echo $atracks->track_title;?></td>
                    <td><?php echo $atracks->song_slug;?></td>
                    <td><?php echo $lyrics;?></td>
					<td><a href="/aiceo/updateTrack/<?php echo $atracks->uno;?>?menu=sound_track&al_code=<?php echo $album_code;?>&al_name=<?php echo $al_name;?>" class="btn btn-block btn-info btn-sm" role="button" aria-pressed="true">Update</a></td>
                </tr>
<?php
endforeach
?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Cover</th>
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
