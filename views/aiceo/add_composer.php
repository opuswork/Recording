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
                <h3 class="card-title">We have records of Composers -> <a href="<?php echo $aic_base_url?>composers">Back to Composers List</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

				<!-- Add new album form element -->
				<div class="card card-primary">
				  <div class="card-header">
					<h3 class="card-title">Add new Composer Information</h3>
				  </div>
				  <!-- /.card-header action="javascript:alert( 'success!' );-->
				  <!-- form start -->
				  <!--<form id="formoid" action="" method="POST" enctype="multipart/form-data">-->
				  <form id="album_frm" method="POST" action="/aiceo/add_new_composer" enctype="multipart/form-data">
					<div class="card-body">
					  <div class="form-group">
						<font color="#FF0000">*</font> is a required item<div id="update_msg"></div>
					  </div>
					  <div class="form-group">
						<label for="exampleInputEmail1">First name <font color="#FF0000">*</font></label>
						<input type="text" name="first_name" value="" id="from_first_name"  class="form-control" id="exampleInputEmail1" placeholder="Guiseppe" required>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Last name <font color="#FF0000">*</font></label>
						<input type="text" name="last_name" value="" id="from_last_name" class="form-control" id="exampleInputPassword1" placeholder="Verdi" onkeyup="combine();" required>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Full name <font color="#FF0000">*</font></label>
						<input type="text" name="full_name" id = "slug-source" value=""  class="form-control" id="exampleInputPassword1" placeholder="Verdi" onkeyup="change();" readonly>
					  </div>					  
<script language="javascript">
<!--
	function combine() {
		const first_name = document.getElementById("from_first_name").value;
		const last_name = document.getElementById("from_last_name").value;
		document.getElementById("slug-source").value = first_name+" "+last_name;
	}	

	function change() {
		const a = document.getElementById("slug-source").value;
		const b = a.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
		document.getElementById("slug-target").value = b;
		a.value=b.value; 
	}
//-->
</script>						  
					  <div class="form-group">
						<label for="exampleInputEmail1">Slug(code for url)</label>
						<input type="text" name="fullname_slug" value="" id="slug-target" class="form-control" readonly />
					  </div>		
					  <div class="form-group">
						<label for="exampleInputPassword1">Nationality <font color="#FF0000">*</font></label>
                        <select class="form-control" name="nation" required>
							<option value="" selected>Choose one</option>
						<?php foreach ($nations as $nts) :?>
								<option value="<?php echo $nts->country_code?>"><?php echo $nts->country_name?></option>
						<?php endforeach ?>
                        </select>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Education <font color="#FF0000">*</font></label>
						<input type="text" name="education" value=""  class="form-control" id="exampleInputPassword1" placeholder="Vincenzo Lavigna, an older composer and an associate of La Scala opera house (Teatro alla Scala)" required>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Job/Professional <font color="#FF0000">*</font></label>
						<div class="input-group">
							<input type="text" value=""  name="job" class="form-control" placeholder="Composer, Politician" required>
						</div>						
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Date of birth <font color="#FF0000">*</font></label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
							</div>
							<input type="text" value=""  name="life_period_start" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm-dd-yyyy" data-mask placeholder="mm-dd-yyyy" required>
						</div>						
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Date of death <font color="#FF0000">*</font></label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
							</div>
							<input type="text" value=""  name="life_period_end" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm-dd-yyyy" data-mask placeholder="mm-dd-yyyy" id="dateofdeath">
						</div>						
					  </div>

<!-- // javascript for summernote --start -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<!-- // javascript for summernote --end -->

					  <div class="form-group">
						<label for="exampleInputPassword1">Biography <font color="#FF0000">*</font></label>
<textarea id="summernote" name="message"> </textarea>
    <script>
      $('#summernote').summernote({
        placeholder: "Early Years Verdi's father, Carlo Giuseppe Verdi, an innkeeper and owner of a small farm, gave his son the best education that could be mustered in a tiny village, near a small town of about 4,000 inhabitants, in the then-impoverished Po Valley. The child must have shown unusual talent, for he was given lessons from his fourth year, a spinet was bought for him, and by age 9 he was standing in for his teacher as organist in the village church. He attended the village school and at 10 the ginnasio (secondary school) in Busseto.",
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

					</div>
					<!-- /.card-body -->

					<div class="card-footer">
					  <button type="submit" id="form_submit" class="btn btn-primary">Save Composer</button>&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" onclick="javascript:document.location.href='/aiceo/composers';">Cancel</button>
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

