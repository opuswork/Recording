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
            <h1></h1>
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
                <h3 class="card-title">We have records of artist -> <a href="<?php echo $aic_base_url?>artist">Back to Artist List</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

				<!-- Add new album form element -->
				<div class="card card-primary">
				  <div class="card-header">
					<h3 class="card-title">Update Artist Information</h3>
				  </div>
				  <!-- /.card-header action="javascript:alert( 'success!' );-->
				  <!-- form start -->
				  <!--<form id="formoid" action="" method="POST" enctype="multipart/form-data">-->
				  <form id="album_frm" method="POST" action="/us/aiceo/updateArtistInformation" enctype="multipart/form-data">
					<input type="hidden" name="performer_no" value="<?php echo $info->performer_no;?>">
					<div class="card-body">
					  <div class="form-group">
						<font color="#FF0000">*</font> is a required item<div id="update_msg"></div>
					  </div>
					  <div class="form-group">
						<label for="exampleInputEmail1">First name <font color="#FF0000">*</font></label>
						<input type="text" name="first_name" value="<?php echo $info->first_name;?>" class="form-control" id="exampleInputEmail1" placeholder="Richard" required>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Last name <font color="#FF0000">*</font></label>
						<input type="text" name="last_name" value="<?php echo $info->last_name;?>"  class="form-control" id="exampleInputPassword1" placeholder="Leech" required>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Nationality <font color="#FF0000">*</font></label>
                        <select class="form-control" name="nation" required>
							<option value="">Choose one</option>
						<?php foreach ($nation as $nts) :
								if ($info->nation == $nts->country_code) {?>
							<option value="<?php echo $nts->country_code?>" selected><?php echo $nts->country_name?></option>
						<?php }else{?>
							<option value="<?php echo $nts->country_code?>"><?php echo $nts->country_name?></option>
						<?php }?>
						<?php endforeach ?>
                        </select>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Education <font color="#FF0000">*</font></label>
						<input type="text" name="education" value="<?php echo $info->education;?>"  class="form-control" id="exampleInputPassword1" placeholder="Binghamton University" required>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Job/Professional <font color="#FF0000">*</font></label>
						<div class="input-group">
							<input type="text" value="<?php echo $info->job;?>"  name="job" class="form-control" placeholder="Voice Faculty of Mason Gross School of Arts at Rutgers University" required>
						</div>						
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Date of birth <font color="#FF0000">*</font></label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
							</div>
							<input type="text" value="<?php echo $info->life_period_start;?>"  name="life_period_start" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm-dd-yyyy" data-mask placeholder="mm-dd-yyyy" required>
						</div>						
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">alive(Y/N) <font color="#FF0000">*</font></label>
                        <div class="form-check">
						<?php if ($info->live_flag == 'no') {?>
                          <input class="form-check-input" type="radio" id="chkYes"  name="live_flag" value="No" onclick="EnableDisableTextBox()" checked>
						  <label class="form-check-label">No</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input class="form-check-input" type="radio" id="chkNo"  name="live_flag" value="Yes" onclick="EnableDisableTextBox()">
						  <label class="form-check-label">Yes</label>
						<?php }else{?>
                          <input class="form-check-input" type="radio" id="chkYes"  name="live_flag" value="No" onclick="EnableDisableTextBox()">
						  <label class="form-check-label">No</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input class="form-check-input" type="radio" id="chkNo"  name="live_flag" value="Yes" onclick="EnableDisableTextBox()" checked>
						  <label class="form-check-label">Yes</label>
						<?php }?>
						</div>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Date of death <font color="#FF0000">*</font></label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
							</div>
							<input type="text" value="<?php echo $info->life_period_end;?>"  name="life_period_end" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm-dd-yyyy" data-mask placeholder="mm-dd-yyyy" id="dateofdeath" disabled="disabled">
						</div>						
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Biography <font color="#FF0000">*</font></label>
						<textarea class="form-control" NAME="content" ROWS="10" COLS="80" placeholder="Richard Leech (born March 26, 1957) is an American operatic tenor, recipient of the Richard Tucker Award in 1988, and particularly associated with lyric roles of the Italian and French repertories." required><?php echo $info->content;?></textarea>
					  </div>
					  <div class="form-group">
						<label for="customFile">Artist Image1</label><br/>
						<?php if ($info->file_name1) {?>
						<img src="/aiceo/artist_image/<?php echo $info->file_name1?>" width="80">
						<input type="hidden" name="old_front_image" value="<?php echo $info->file_name1;?>">
						<?php }?>
						<div class="custom-file">
						  <input type="file" name="front_image" class="custom-file-input" id="customFile">
						  <label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					  </div>
					  <div class="form-group">
						<label for="customFile">Artist Image2</label><br/>
						<?php if ($info->file_name2) {?>
						<img src="/aiceo/artist_image/<?php echo $info->file_name2?>" width="80">
						<input type="hidden" name="old_back_image" value="<?php echo $info->file_name2;?>">
						<?php }?>
						<div class="custom-file">
						  <input type="file" name="back_image" class="custom-file-input" id="customFile">
						  <label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					  </div>

					</div>
					<!-- /.card-body -->

					<div class="card-footer">
					  <button type="submit" id="form_submit" class="btn btn-primary">Update Info.</button>&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" onclick="javascript:document.location.href='/us/aiceo/artist';">Cancel</button>
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

<script type="text/javascript">
	function EnableDisableTextBox() {
		var chkYes = document.getElementById("chkYes");
		var dateofdeath = document.getElementById("dateofdeath");
		dateofdeath.disabled = chkYes.checked ? false : true;
		dateofdeath.value = "";
		if (!dateofdeath.disabled) {
			dateofdeath.focus();
		}
	}
</script>

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

