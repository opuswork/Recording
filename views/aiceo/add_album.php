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
            <h1>Album List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Album List</li>
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
                <h3 class="card-title">We have records of albums -> <a href="<?php echo $aic_base_url?>albums">Back to Album List</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

				<!-- Add new album form element -->
				<div class="card card-primary">
				  <div class="card-header">
					<h3 class="card-title">Add new Album Information</h3>
				  </div>
				  <!-- /.card-header action="javascript:alert( 'success!' );-->
				  <!-- form start -->
				  <!--<form id="formoid" action="" method="POST" enctype="multipart/form-data">-->
				  <form id="album_frm" method="POST" action="/aiceo/add_new_record" enctype="multipart/form-data">
					<div class="card-body">
					  <div class="form-group">
						<font color="#FF0000">*</font> is a required item<div id="update_msg"></div>
					  </div>
<script language="javascript">
<!--
	function change() {
		const a = document.getElementById("slug-source").value;
		const b = a.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
		document.getElementById("slug-target").value = b;
		a.value=b.value; 
	}
//-->
</script>						  
					  <div class="form-group">
						<label for="exampleInputEmail1">Album Title(Name) <font color="#FF0000">*</font></label>
						<input type="text" name="album_names" value="" class="form-control"  id="slug-source" placeholder="101 Essential Opera Favourites - Welt Der Oper CD6" onkeyup="change();" required>
					  </div>
					  <div class="form-group">
						<label for="exampleInputEmail1">Title-Slug <font color="#FF0000">*</font></label>
						<input type="text" name="title_slug"  value=""  id="slug-target" class="form-control"  readonly>
					  </div>	
					  <div class="form-group">
						<label for="exampleInputPassword1">Album Summery(detail) <font color="#FF0000">*</font></label>
						<input type="text" name="album_ko_name" value=""  class="form-control" id="exampleInputPassword1" placeholder="101 Essential Opera Favourites by celebrated opera singers, Giacomo Puccini, Léo Delibes, Wolfgang Amadeus Mozart" required>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Album Genre(Big Category:Voice) <font color="#FF0000">*</font></label>
                        <select class="form-control" name="genre" required>
							<option value="" selected>Choose one</option>
						<?php foreach ($big as $big_cate) :?>
								<option value="<?php echo $big_cate->level1?>"><?php echo $big_cate->level1?></option>
						<?php endforeach ?>
                        </select>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Album Genre(Small Category:Opera) <font color="#FF0000">*</font></label>
                        <select class="form-control" name="album_kinds" required>
							<option selected>Choose one</option>
						<?php foreach ($small as $small_cate) :?>
								<option value="<?php echo $small_cate->level2;?>"><?php echo $small_cate->level2;?></option>
						<?php endforeach ?>
                        </select>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Publishing Date(Release Date) <font color="#FF0000">*</font></label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
							</div>
							<input type="text" value=""  name="sale_date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy" data-mask placeholder="yyyy" required>
						</div>						
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Label(Publisher) <font color="#FF0000">*</font></label>
                        <select class="form-control" name="record_company" required>
							<option value="" >Choose one</option>
						<?php 
						foreach ($label as $publisher) {
								if ($info->record_company == $publisher->label_name) {?>
								<option value="<?php echo $publisher->label_name;?>" selected>
									<?php echo $publisher->label_name;?>
								</option>
						<?php   }else{ ?>
								<option value="<?php echo $publisher->label_name;?>">
									<?php echo $publisher->label_name;?>
								</option>
						<?php   }
						}
						?>
                        </select>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Total Running Time <font color="#FF0000">*</font></label>
						<input type="text" name="run_time" class="form-control" id="endTime"  placeholder="00:00:00" value="" required>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Performer(Name) <font color="#FF0000">*</font></label>
						<textarea class="form-control" NAME="artist_info" ROWS="10" COLS="80" 
						placeholder="Luciano Pavarotti, Italian Lyric Spinto tenor; 
Joan Sutherland, Italian Lyric Spinto Soprano;
Tom Krause, Swedish Bass Baritone;
Libero de Luca, Italian Lyric Tenor;
Jean Borthayre, French Lyric Baritone; 
Renata Tebaldi, Italian Lyric Soprano;
Carlo Bergonzi, Italian Lyric Tenor;
Chorus Of The Accademia Di Santa Cecilia; 
Giuseppe Taddei, Italian Baritone" required></textarea>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Composer Information(name) <font color="#FF0000">*</font></label>
						<textarea class="form-control" NAME="comp_info" ROWS="10" COLS="80" placeholder="Puccini, Giacomo 
Delibes, Léo; 
Mozart, Wolfgang Amadeus;
Gounod, Charles; 
Bizet, Georges; 
Ponchielli, Amilcare" required></textarea>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Recommandation Count <font color="#FF0000">*</font></label>
						<input type="text" name="recom" class="form-control" id="exampleInputPassword1" placeholder="23451" value="" required>
					  </div>
					  <div class="form-group">
							<label for="exampleInputPassword1">Catalog Number <font color="#FF0000">*</font></label>
							<div class="input-group">
								<input type="text" name="catalog_no" class="form-control" id="exampleInputPassword1" placeholder="Please push the button, Generate" value="" rel="gp" data-size="10" data-character-set="0-9" readonly><button type="button" class="btn btn-info btn-flat">Generate</button>
							</div>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Featured <font color="#FF0000">*</font></label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="featured" value="No" checked>
						  <label class="form-check-label">No</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input class="form-check-input" type="radio" name="featured" value="Yes">
						  <label class="form-check-label">Yes</label>
						</div>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Recording Type <font color="#FF0000">*</font></label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="record_method" value='Stereo DDD' checked>
						  <label class="form-check-label">Stereo DDD</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input class="form-check-input" type="radio" name="record_method" value='Stereo ADD'>
						  <label class="form-check-label">Stereo ADD</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input class="form-check-input" type="radio" name="record_method" value='Stereo AAD'>
						  <label class="form-check-label">Stereo AAD</label>
                        </div>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Sale Price <font color="#FF0000">*</font></label>
						<div class="input-group">
						  <div class="input-group-prepend">
							<span class="input-group-text">
							  <i class="fas fa-dollar-sign"></i>
							</span>
						  </div>
						  <input type="text" name="album_price" class="form-control" value="" placeholder="150.89" required>
						</div>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Album Type <font color="#FF0000">*</font></label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="album_quota" value="CD">
						  <label class="form-check-label">CD</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input class="form-check-input" type="radio" name="album_quota" value="DVD" checked>
						  <label class="form-check-label">DVD</label>							
						  <div class="col-2">
							Album quantity:<input type="text" name="quota_size" value="" class="form-control">
						  </div>
						</div>
					  </div>
					  <!--<div class="form-group">
						<label for="exampleInputPassword1">Track Quantity(Enter number) <font color="#FF0000">*</font></label>
						<input type="text" name="cd_no_track_cnt" class="form-control" id="exampleInputPassword1" placeholder="102" value="" required>
					  </div>-->
					  <div class="form-group">
						<label for="customFile">Front Cover Image File</label>
						<div class="custom-file">
						  <input type="file" name="front_image" class="custom-file-input" id="customFile" required>
						  <label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					  </div>
					  <div class="form-group">
						<label for="customFile">Back Cover Image File</label>
						<div class="custom-file">
						  <input type="file" name="back_image" class="custom-file-input" id="customFile" required>
						  <label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					  </div>
<!-- // javascript for summernote --start -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<!-- // javascript for summernote --end -->					  
					  <div class="form-group">
						<label for="exampleInputPassword1">Album Description(detail) <font color="#FF0000">*</font></label>
    <textarea id="summernote" name="description" required> </textarea>
    <script>
      $('#summernote').summernote({
        placeholder: "This recording is about ...",
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
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
					  <button type="submit" id="form_submit" class="btn btn-primary">Save Album</button>&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" onclick="javascript:document.location.href='/us/aiceo/albums';">Cancel</button>
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

