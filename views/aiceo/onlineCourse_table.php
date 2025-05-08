<?php
$resources_url	= "/resources/aic/";
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
            <h1>Online Courses List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Online Courses List</li>
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
                <h3 class="card-title">We have records of Online Courses & Articles&nbsp;</h3>
              </div>
              <div class="card-header">
                <h3 class="card-title"><a href="<?php echo $aic_base_url;?>addCourse" class="btn btn-block btn-info btn-sm" role="button" aria-pressed="true">Add Course</a></h3>
              </div>              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					          <th>CoverPhoto</th>
                    <th>Course Title[class Code]</th>
                    <th>Status</th>
                    <th>Class time</th>
          					<th>Duration</th>
          					<th>Category</th>
          					<th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>

<?php
foreach ($all_OCourses as $al_courses) :
?>
                  <tr>
					          <td><?php 
                          if ($al_courses->file_name1 != NULL) { 
                    ?><img src="<?php echo $resources_url;?>uploads/<?php echo $al_courses->file_name1;?>" width="80" height="80">
                    <?php } else {?>
                      <img src="<?php echo $resources_url;?>dist/img/NO_IMG.jpg" width="80" height="80">
                    <?php }?>
                    </td>
                    <td><?php echo $al_courses->title;?> [<?php echo $al_courses->course_code;?>]</td>
                    <td><?php switch ($al_courses->open_type) {
                                  case '1':
                                    // code...
                                  echo ("OnSemester");
                                    break;
                                  case '2':
                                    // code...
                                  echo ("Registration Open");
                                    break;
                                  case '3':
                                    // code...
                                  echo ("Registration Closed");
                                    break;
                        }?>
                    </td>
                    <td><?php echo $al_courses->class_time;?></td>
                    <td><?php switch ($al_courses->duration) {
                                    case '30_00':
                                      // code...
                                      echo ("30:00");
                                      break;
                                    case '50_00':
                                      // code...
                                      echo ("50:00");
                                      break;
                                    case '60_00':
                                      // code...
                                      echo ("60:00");
                                      break;
                                    case '1_15_00':
                                      // code...
                                      echo ("1:15:00");
                                      break;
                    }?></td>
                    <td><?php echo $al_courses->article_type;?></td>
					          <td><a href="/aiceo/editCourse/<?php echo $al_courses->num;?>" class="btn btn-block btn-info btn-sm" role="button" aria-pressed="true">Update</a></td>
                  </tr>
<?php
endforeach
?>

                  </tbody>
                  <tfoot>
                  <tr>
                  <th>CoverPhoto</th>
                    <th>Course Title</th>
                    <th>Status</th>
                    <th>Class time</th>
          					<th>Duration</th>
          					<th>Category</th>
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