<?php
$resources_url	= "/resources/opus/";
$resources_summernote = "resources/opus/";
$aic_base_url	= "/aiceo/";

$conversed_title = str_replace('"', "'", $single_tr[0]->track_title);
$titled = str_replace(',', "-", $conversed_title);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Song Detail/Meta information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Song Information</li>
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
                <h3 class="card-title">We have records of albums -> <a href="javascript:history.back();">Back to Track List</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

				<!-- Add new album form element -->
				<div class="card card-primary">
				  <div class="card-header">
					<h3 class="card-title">Update Song Information</h3>
				  </div>
				  <!-- /.card-header action="javascript:alert( 'success!' );-->
				  <!-- form start -->
				  <!--<form id="formoid" action="" method="POST" enctype="multipart/form-data">-->
				  <form id="album_frm" method="POST" action="/aiceo/updateTrackSubmit" enctype="multipart/form-data">
					<input type="hidden" name="song_uno" value="<?php echo $single_tr[0]->uno;?>">
					<input type="hidden" name="album_code" value="<?php echo $single_tr[0]->album_code;?>">
					<input type="hidden" name="al_name" value="<?php echo $single_tr[0]->album_title;?>">
					<div class="card-body">
					  <div class="form-group">
						<font color="#FF0000">*</font> is a required item<div id="track_updated_msg"></div>
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
						<label for="exampleInputEmail1">Song Title <font color="#FF0000">*</font></label>
						<input type="text" name="song_title"  value="<?php echo $titled;?>"  id="slug-source" class="form-control" onkeyup="change();" required>
					  </div>					  
					  <div class="form-group">
						<label for="exampleInputPassword1">Title Slug <font color="#FF0000">*</font>{*:primary key}</label>
						<input type="text" name="song_slug" value="<?php echo $single_tr[0]->song_slug;?>"  class="form-control" id="slug-target" placeholder="title_slug auto-generated" readonly required>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Album Code <font color="#FF0000">*</font>{*:foreign key}</label>
						<input type="text" name="album_code" class="form-control" id="exampleInputPassword1" placeholder="23451" value="<?php echo $single_tr[0]->album_code;?>" readonly required>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Album name <font color="#FF0000">*</font></label>
						<input type="text" name="album_name" class="form-control" id="endTime"  placeholder="Album title" value="<?php echo $single_tr[0]->album_title;?>" disabled>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Price <font color="#FF0000">*</font></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>						
                            <input type="text" name="price" class="form-control" id="endTime"  placeholder="Album title" value="<?php echo $single_tr[0]->price;?>" required>
                        </div>
					  </div>      
					  <div class="form-group">
						<label for="exampleInputPassword1">Genre detail <font color="#FF0000">*</font></label>
						<input type="text" name="genre_detail" class="form-control" id="exampleInputPassword1" placeholder="23451" value="<?php echo $single_tr[0]->genre;?>" required>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Record Company <font color="#FF0000">*</font></label>
						<input type="text" name="record_company" class="form-control" id="exampleInputPassword1" placeholder="23451" value="<?php echo $single_tr[0]->record_company;?>" required>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Featured Musicians <font color="#FF0000">*</font></label>
						<textarea class="form-control" NAME="featured_musician" ROWS="10" COLS="80" placeholder="Puccini, Giacomo 
Delibes, Léo; 
Mozart, Wolfgang Amadeus;
Gounod, Charles; 
Bizet, Georges; 
Ponchielli, Amilcare" required><?php echo $single_tr[0]->artist_info;?></textarea>
					  </div>

                      <div class="form-group">
						<label for="exampleInputPassword1">Composer Information <font color="#FF0000">*</font></label>
						<textarea class="form-control" NAME="composer" ROWS="10" COLS="80" placeholder="Puccini, Giacomo 
Delibes, Léo; 
Mozart, Wolfgang Amadeus;
Gounod, Charles; 
Bizet, Georges; 
Ponchielli, Amilcare" required><?php echo $single_tr[0]->comp_info;?></textarea>
					  </div>


					  <!--<div class="form-group">
						<label for="exampleInputPassword1">Track Quantity(Enter number) <font color="#FF0000">*</font></label>
						<input type="text" name="cd_no_track_cnt" class="form-control" id="exampleInputPassword1" placeholder="102" value="?php echo $info->track_cnt;?" required>
					  </div>-->
					  <div class="form-group">
						<label for="exampleInputFile">Front Cover <font color="#FF0000">*</font></label><br/>
                        <?php if ($single_tr[0]->front_cover) {?>
						<img src="<?php echo $resources_url;?>ds/album_image/<?php echo $single_tr[0]->front_cover;?>" width="80">
                        <input type="hidden" name="old_front_image" value="<?php echo $single_tr[0]->front_cover;?>">
						<?php }?>
						<div class="input-group">
						  <div class="custom-file">
							<input type="file" name="front_image" class="custom-file-input" disabled>
							<label class="custom-file-label" for="exampleInputFile">Choose file</label>
						  </div>
						</div>
					  </div>
					  <div class="form-group">
						<label for="exampleInputFile">Back Cover <font color="#FF0000">*</font></label><br/>
						<?php if ($single_tr[0]->back_cover) {?>
						<img src="<?php echo $resources_url;?>ds/album_image/<?php echo $single_tr[0]->back_cover;?>" width="80">
						<input type="hidden" name="old_back_image" value="<?php echo $single_tr[0]->back_cover;?>">
						<?php }?>
						<div class="input-group">
						  <div class="custom-file">
							<input type="file" name="back_image" class="custom-file-input" disabled>
							<label class="custom-file-label" for="exampleInputFile">Choose file</label>
						  </div>
						</div>
<!-- // javascript for summernote --start -->
	<script src="<?php echo base_url().$resources_summernote?>js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="<?php echo base_url().$resources_summernote?>js/summernote-lite.min.css" rel="stylesheet">
    <script src="<?php echo base_url().$resources_summernote?>js/summernote-lite.min.js"></script>
<!-- // javascript for summernote --end -->		
<div class="form-group">
						<label for="exampleInputPassword1">Song Lyrics <font color="#FF0000">*</font></label>
    <textarea id="summernote" name="lyrics"><?php echo $single_tr[0]->lyrics;?> </textarea>
    <script>
      $('#summernote').summernote({
        placeholder: "This recording is about ...",
        tabsize: 2,
        height: 300,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear', 'italic']],
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
					  </div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
					  <button type="submit" id="form_submit" class="btn btn-primary">Save Song information</button>&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" onclick="javascript:document.location.href='javascript:history.back();'">Cancel</button>
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

<script src='<?php echo base_url().$resources_summernote?>js/jquery.form.min.js'></script>
<script src='<?php echo base_url().$resources_summernote?>js/jquery.min.js'></script>
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

