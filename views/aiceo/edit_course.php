<?php
$resources_url	= "/resources/aic/";
$aic_base_url	= "/aiceo/";
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Online Course</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Online Course</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- // javascript for summernote --start -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<!-- // javascript for summernote --end -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href="<?php echo $aic_base_url?>onlineCourses">Back to Course List</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

				<!-- Add new album form element -->
				<div class="card card-primary">
				  <div class="card-header">
					<h3 class="card-title">Add new Course Information</h3>
				  </div>
				  <!-- /.card-header action="javascript:alert( 'success!' );-->
				  <!-- form start -->
				  <!--<form id="formoid" action="" method="POST" enctype="multipart/form-data">-->
				  <form id="course_frm" method="POST" action="/aiceo/update_course" enctype="multipart/form-data">
				  <input type="hidden" name="article_type" value="1">
				  <input type="hidden" name="num_course" value="<?php echo $course_itms->num; ?>">
					<div class="card-body">
					  <div class="form-group">
						<font color="#FF0000">*</font> is a required item<div id="update_msg"></div>
					  </div>
					  <div class="form-group">
						<label for="exampleInputEmail1">CourseTitle(Name) <font color="#FF0000">*</font></label>
						<input type="text" name="title" value="<?php echo $course_itms->title; ?>" class="form-control" id="exampleInputEmail1" placeholder="Alexander Technique for voice" required>
					  </div>
					  <div class="form-group">

						<label for="exampleInputPassword1">Course Summery(detail) <font color="#FF0000">*</font></label>


    <textarea id="summernote" name="message"><?php echo $course_itms->content; ?> </textarea>
    <script>
      $('#summernote').summernote({
        placeholder: "The Alexander Technique, developed by F.M. Alexander, relieves body fatigue by relaxing the body's muscles, maximizes the energy from the muscles to increase the vitality of life, and furthermore, muscle relaxation and pain relief that improves the overall quality of life. It is a purposeful physical and mental training method. It is an exercise that trains pianists, instrumentalists, and vocalists to relax their muscles as much as possible so that they can play comfortably. It is used by physical therapy at the same time.<br><br>This course provides general knowledge of Alexander Technique and then lecture focuses on particular matters for vocalist in order to achieve what this course pursues on the purpose of benefits.",
        tabsize: 2,
        height: 300,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>

					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Class Day <font color="#FF0000">*</font></label>
              <select class="form-control" name="on_air_day" required>
													<option value="" selected>Choose one</option>
						<?php switch ($course_itms->on_air_day) {
										case "MO":
											echo ("
													<option value=\"MO\" selected>Monday</option>
													<option value=\"TU\">Tuesday</option>
													<option value=\"WE\">Wednesday</option>
													<option value=\"TH\">Thursday</option>
													<option value=\"FR\">Friday</option>
													<option value=\"MOWEFR\">Monday,Wednesday,Friday</option>
													<option value=\"TUTH\">Tuesday,Thursday</option>
													<option value=\"MOWE\">Monday,Wednesday</option>	
											");
											break;

										case "TU":
											echo ("
													<option value=\"MO\">Monday</option>
													<option value=\"TU\" selected>Tuesday</option>
													<option value=\"WE\">Wednesday</option>
													<option value=\"TH\">Thursday</option>
													<option value=\"FR\">Friday</option>
													<option value=\"MOWEFR\">Monday,Wednesday,Friday</option>
													<option value=\"TUTH\">Tuesday,Thursday</option>
													<option value=\"MOWE\">Monday,Wednesday</option>	
											");
											break;

										case "WE":
											echo ("
													<option value=\"MO\">Monday</option>
													<option value=\"TU\">Tuesday</option>
													<option value=\"WE\" selected>Wednesday</option>
													<option value=\"TH\">Thursday</option>
													<option value=\"FR\">Friday</option>
													<option value=\"MOWEFR\">Monday,Wednesday,Friday</option>
													<option value=\"TUTH\">Tuesday,Thursday</option>
													<option value=\"MOWE\">Monday,Wednesday</option>	
											");
											break;

										case "TH":
											echo ("
													<option value=\"MO\">Monday</option>
													<option value=\"TU\">Tuesday</option>
													<option value=\"WE\">Wednesday</option>
													<option value=\"TH\" selected>Thursday</option>
													<option value=\"FR\">Friday</option>
													<option value=\"MOWEFR\">Monday,Wednesday,Friday</option>
													<option value=\"TUTH\">Tuesday,Thursday</option>
													<option value=\"MOWE\">Monday,Wednesday</option>	
											");
											break;

										case "FR":
											echo ("
													<option value=\"MO\">Monday</option>
													<option value=\"TU\">Tuesday</option>
													<option value=\"WE\">Wednesday</option>
													<option value=\"TH\">Thursday</option>
													<option value=\"FR\" selected>Friday</option>
													<option value=\"MOWEFR\">Monday,Wednesday,Friday</option>
													<option value=\"TUTH\">Tuesday,Thursday</option>
													<option value=\"MOWE\">Monday,Wednesday</option>	
											");
											break;

										case "MOWEFR":
											echo ("
													<option value=\"MO\">Monday</option>
													<option value=\"TU\">Tuesday</option>
													<option value=\"WE\">Wednesday</option>
													<option value=\"TH\">Thursday</option>
													<option value=\"FR\">Friday</option>
													<option value=\"MOWEFR\" selected>Monday,Wednesday,Friday</option>
													<option value=\"TUTH\">Tuesday,Thursday</option>
													<option value=\"MOWE\">Monday,Wednesday</option>	
											");
											break;

										case "TUTH":
											echo ("
													<option value=\"MO\">Monday</option>
													<option value=\"TU\">Tuesday</option>
													<option value=\"WE\">Wednesday</option>
													<option value=\"TH\">Thursday</option>
													<option value=\"FR\">Friday</option>
													<option value=\"MOWEFR\">Monday,Wednesday,Friday</option>
													<option value=\"TUTH\" selected>Tuesday,Thursday</option>
													<option value=\"MOWE\">Monday,Wednesday</option>	
											");
											break;

										case "MOWE":
											echo ("
													<option value=\"MO\">Monday</option>
													<option value=\"TU\">Tuesday</option>
													<option value=\"WE\">Wednesday</option>
													<option value=\"TH\">Thursday</option>
													<option value=\"FR\">Friday</option>
													<option value=\"MOWEFR\">Monday,Wednesday,Friday</option>
													<option value=\"TUTH\">Tuesday,Thursday</option>
													<option value=\"MOWE\" selected>Monday,Wednesday</option>	
											");
											break;

						} ?>

	            </select>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Class Status <font color="#FF0000">*</font></label>
                <select class="form-control" name="open_type" required>
													<option selected>Choose one</option>
<?php 
					switch ($course_itms->open_type) {
							case '1':
								// code...
									echo ("
													<option value=\"1\" selected>OnSemester</option>
													<option value=\"2\">Registration Closed</option>
													<option value=\"3\">Registration Open</option>							
										");
								break;

							case '2':
								// code...
									echo ("
													<option value=\"1\">OnSemester</option>
													<option value=\"2\" selected>Registration Closed</option>
													<option value=\"3\">Registration Open</option>							
										");
								break;

							case '3':
								// code...
									echo ("
													<option value=\"1\">OnSemester</option>
													<option value=\"2\">Registration Closed</option>
													<option value=\"3\" selected>Registration Open</option>							
										");
								break;

					}
?>                	

		            </select>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Class Created Date <font color="#FF0000">*</font></label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
							</div>
							<?php $created_date = $course_itms->register_date;?>
							<input type="text" value="<?php echo $created_date;?>"  name="register_date" class="form-control" placeholder="mm/dd/yyyy" required>
						</div>						
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Class Duration Time <font color="#FF0000">*</font></label>
	            <select class="form-control" name="duration" required>
								<option selected>Choose one</option>
<?php 
					switch ($course_itms->duration) {
							case '30_00':
								// code...
									echo ("
													<option value=\"30_00\" selected>30 Mins</option>
													<option value=\"50_00\">50 Mins</option>
													<option value=\"1_15_00\">1 Hr 15 Mins</option>
										");
								break;

							case '50_00':
								// code...
									echo ("
													<option value=\"30_00\">30 Mins</option>
													<option value=\"50_00\" selected>50 Mins</option>
													<option value=\"1_15_00\">1 Hr 15 Mins</option>
										");
								break;

							case '1_15_00':
								// code...
									echo ("
													<option value=\"30_00\">30 Mins</option>
													<option value=\"50_00\">50 Mins</option>
													<option value=\"1_15_00\" selected>1 Hr 15 Mins</option>
										");
								break;


					}
?>	            	
	            </select>						
					  </div>

					  <div class="form-group">
							<label for="exampleInputPassword1">Class Time <font color="#FF0000">*</font></label>
<!--							
	            <select class="form-control" name="class_time" required>
								<option selected>Choose one</option>
								<option value="0900">09:00</option>
								<option value="1000">10:00</option>
								<option value="1100">11:00</option>
								<option value="1200">12:00</option>
	            </select>
	            <span><input type="radio" value="class_time_type">AM <input type="radio" value="class_time_type">PM </span>
//-->
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-4">
                  	<!-- /input-group start -->
                    <div class="input-group">
                     <select class="form-control" name="class_time" required>
						 <option selected>Choose one</option>
<?php
					switch ($course_itms->class_time) {
						case '08:30':
							// code...
								echo ("
									<option value=\"08:30\" selected>08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '09:00':
							// code...
								echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\" selected>09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '09:30':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\" selected>09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '10:00':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\" selected>10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '10:30':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\" selected>10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '11:00':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\" selected>11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '11:30':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\" selected>11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '12:00':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\" selected>12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '13:30':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\" selected>13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '14:00':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\" selected>14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '14:30':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\" selected>14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '15:00':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\" selected>15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '15:30':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\" selected>15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '16:00':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\" selected>16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '16:30':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\" selected>16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '17:00':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\" selected>17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '17:30':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\" selected>17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '18:00':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\" selected>18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '18:30':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\" selected>18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '19:00':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\" selected>19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '19:30':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\" selected>19:30</option>
									<option value=\"20:00\">20:00</option>
									");
						break;

						case '20:00':
							// code...
									echo ("
									<option value=\"08:30\">08:30</option>
									<option value=\"09:00\">09:00</option>
									<option value=\"09:30\">09:30</option>
									<option value=\"10:00\">10:00</option>
									<option value=\"10:30\">10:30</option>
									<option value=\"11:00\">11:00</option>
									<option value=\"11:30\">11:30</option>
									<option value=\"12:00\">12:00</option>
									<option value=\"13:30\">13:30</option>
									<option value=\"14:00\">14:00</option>
									<option value=\"14:30\">14:30</option>
									<option value=\"15:00\">15:00</option>
									<option value=\"15:30\">15:30</option>
									<option value=\"16:00\">16:00</option>
									<option value=\"16:30\">16:30</option>
									<option value=\"17:00\">17:00</option>
									<option value=\"17:30\">17:30</option>
									<option value=\"18:00\">18:00</option>
									<option value=\"18:30\">18:30</option>
									<option value=\"19:00\">19:00</option>
									<option value=\"19:30\">19:30</option>
									<option value=\"20:00\" selected>20:00</option>
									");
						break;
					}
?>						

					 </select>
                    </div>
                    <!-- /input-group -->
                  </div>            
					  </div>

					  <div class="form-group">
							<label for="customFile">Cover Image File</label>
								<?php 
											$old_front_img = $course_itms->file_name1;
											if ($old_front_img != NULL) {
												echo "Existing file: ".$old_front_img;
											}
								?>
								<input type="hidden" name="old_front_image" value="<?php echo $old_front_img?>">
							<div class="custom-file">
							  <input type="file" name="front_image" class="custom-file-input" id="customFile">
							  <label class="custom-file-label" for="customFile">Choose File</label>
							</div>
					  </div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
<?php 
            if ($this->session->flashdata('profile_message')) {
                    echo ("<b>".$this->session->flashdata('profile_message')."</b><br/>");
}?> 						
					  <button type="submit" id="form_submit" class="btn btn-primary">Save Album</button>&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" onclick="javascript:document.location.href='/aiceo/onlineCourses';">Cancel</button>
					</div>

				  </form>

				</div>
				<!-- /.card -->

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

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript">
  // Generate a password string
function randString(id){
  var dataSet = $(id).attr('data-character-set').split(',');  
  var possible = '';

  if($.inArray('0-9', dataSet) >= 0){
    possible += '0123456789';
  }

  var text = '';
  for(var i=0; i < $(id).attr('data-size'); i++) {
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  }
  return text;
}

// Create a new password on page load
$('input[rel="gp"]').each(function(){
  $(this).val('');
});

// Create a new password
$(".btn-flat").click(function(){
  var field = $(this).closest('div').find('input[rel="gp"]');
  field.val(randString(field));
});

// Auto Select Pass On Focus
$('input[rel="gp"]').on("click", function () {
   $(this).select();
});
</script>

</body>
</html>

