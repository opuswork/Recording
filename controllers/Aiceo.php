<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Aiceo extends MY_Controller {
	public function __construct()
    {       
        parent::__construct();    
        $this->load->library('email');
		$this->load->model('topic_model');
		$this->load->model('register_model');
    }    

	function nopage() {
		$this->load->view('aiceo/nopage');
	}

	function ai()
	{
//        $user = $this->user_model->get($this->session->userdata('username'));
        $this->load->view('aiceo/head');
		$this->load->view('aiceo/sidebar');
        $this->load->view('aiceo/main');
		$this->load->view('aiceo/footer');
	}


	function albums()
	{
//        $user = $this->user_model->get($this->session->userdata('username'));
        $this->load->view('aiceo/head');
        $this->load->view('aiceo/sidebar');

	$alles['all_album'] = $this->topic_model->get_all_album($this->uri->segment(3));
        $this->load->view('aiceo/album_table', $alles);

	$this->load->view('aiceo/footer');		
	}

	function track_for_albums()
	{
//        $user = $this->user_model->get($this->session->userdata('username'));
        $this->load->view('aiceo/head');
        $this->load->view('aiceo/sidebar');

		//$alles['all_tracks'] = $this->topic_model->get_all_track_per_album();
		$alles['all_tracks'] = $this->topic_model->get_top_one_track();
        $this->load->view('aiceo/track_table', $alles);

		$this->load->view('aiceo/footer');		
	}

	function sound_track()
	{
//        $user = $this->user_model->get($this->session->userdata('username'));
        $this->load->view('aiceo/head');
        $this->load->view('aiceo/sidebar');

		//$alles['all_tracks'] = $this->topic_model->get_all_track_per_album();
		$alles['all_tracks'] = $this->topic_model->get_top_one_track_in_aiceo();
        $this->load->view('aiceo/all_track_for_albums', $alles);

		$this->load->view('aiceo/footer');		
	}

	// *************************************
	// 작업중 - 해당 앨범의 모든 음원 가져오기
	// *************************************

	function all_tracks_detail()
	{
		$this->load->view('aiceo/head');
        $this->load->view('aiceo/sidebar');

		//$alles['all_tracks'] = $this->topic_model->get_all_track_per_album();
		$alles['all_tracks'] = $this->topic_model->get_single_track_detail($this->uri->segment(3));
        $this->load->view('aiceo/all_tracks_detail', $alles);

		$this->load->view('aiceo/footer');	
	}

	//////////////////////////////////////////////////////////////////////////
	// add new album view
	function addAlbum()
	{

        $this->load->view('aiceo/head');
        $this->load->view('aiceo/sidebar');
		
		$albums['big'] = $this->topic_model->get_big_category1($this->uri->segment(3));
		$albums['small'] = $this->topic_model->get_small_category1($this->uri->segment(3));
		$albums['label'] = $this->topic_model->get_publisher($this->uri->segment(3));
        $this->load->view('aiceo/add_album', $albums);

		$this->load->view('aiceo/footer');		
	}

	//////////////////////////////////////////////////////////////////////////
	// add new album view
	function addArtist()
	{

		$this->load->view('aiceo/head');
		$this->load->view('aiceo/sidebar');
		$artists['nations'] = $this->topic_model->get_nation($this->uri->segment(3));
	    $this->load->view('aiceo/add_artist', $artists);
		$this->load->view('aiceo/footer');		
	}

	//////////////////////////////////////////////////////////////////////////
	// add new composer view
	function addComposer()
	{

		$this->load->view('aiceo/head');
		$this->load->view('aiceo/sidebar');
		$artists['nations'] = $this->topic_model->get_nation($this->uri->segment(3));
	    $this->load->view('aiceo/add_composer', $artists);
		$this->load->view('aiceo/footer');		
	
	}


	//////////////////////////////////////////////////////////////////////////
	// add new course or article view
	function addCourse()
	{

	    $this->load->view('aiceo/head');
	    $this->load->view('aiceo/sidebar');
		//$artists['nations'] = $this->topic_model->get_nation($this->uri->segment(3));
	    $this->load->view('aiceo/add_course');
		$this->load->view('aiceo/footer');		
	
	}

	function editCourse()
	{

	    $this->load->view('aiceo/head');
	    $this->load->view('aiceo/sidebar');
		$noCrse['course_itms'] = $this->topic_model->get_course_data($this->uri->segment(3));
	    $this->load->view('aiceo/edit_course', $noCrse);
		$this->load->view('aiceo/footer');		
	
	}


	//////////////////////////////////////////////////////////////////////////
	// update album view
	function updateAlbum($no) {

        $this->load->view('aiceo/head');
        $this->load->view('aiceo/sidebar');
		
		$albums['big'] = $this->topic_model->get_big_category1($this->uri->segment(3));
		$albums['small'] = $this->topic_model->get_small_category1($this->uri->segment(3));
		$albums['label'] = $this->topic_model->get_publisher($this->uri->segment(3));
		$albums['info'] = $this->topic_model->get_one_album($no);
        $this->load->view('aiceo/update_album', $albums);

		$this->load->view('aiceo/footer');				
	}
	
	function updateTrack() {

        $this->load->view('aiceo/head');
        $this->load->view('aiceo/sidebar');
		
		$tracks = $this->topic_model->check_Null_in_track($this->uri->segment(3));

		if ($tracks->lyrics != "") {	# if selected items are not NULL
			$track['single_tr'] = $this->topic_model->get_single_track_detail_of_it($this->uri->segment(3));
			$this->load->view('aiceo/update_track_to_info', $track);
		}else{
			$track['single_tr'] = $this->topic_model->get_single_track_details2($this->uri->segment(3));
			$this->load->view('aiceo/update_track', $track);
		}

		$this->load->view('aiceo/footer');				
	}


	//////////////////////////////////////////////////////////////////////////
	// update artist view
	function updateArtist($no) {

        $this->load->view('aiceo/head');
        $this->load->view('aiceo/sidebar');
		
		$artist['nation'] = $this->topic_model->get_nation($this->uri->segment(3));
//		$albums['small'] = $this->topic_model->get_small_category1($this->uri->segment(3));
//		$albums['label'] = $this->topic_model->get_publisher($this->uri->segment(3));
		$artist['info'] = $this->topic_model->get_one_artist($no);
        $this->load->view('aiceo/update_artist', $artist);

		$this->load->view('aiceo/footer');				
	}

	//////////////////////////////////////////////////////////////////////////
	// update composer view
	function updateComp($uno) {

        $this->load->view('aiceo/head');
        $this->load->view('aiceo/sidebar');
		
		$comp['nation'] = $this->topic_model->get_nation($this->uri->segment(3));
//		$albums['small'] = $this->topic_model->get_small_category1($this->uri->segment(3));
//		$albums['label'] = $this->topic_model->get_publisher($this->uri->segment(3));
		$comp['info'] = $this->topic_model->get_one_composer_at_aiceo($this->uri->segment(3));
        $this->load->view('aiceo/update_composer', $comp);

		$this->load->view('aiceo/footer');				
	}


	function deleteComp($uno) {
		$this->load->model("topic_model");
		$sql_del = $this->topic_model->deleteComposer1($uno);
		if($sql_del){
			$data['success'] = "Category Have been deleted Successfully!!";  //success message goes here 
	  	}		
	}

	//////////////////////////////////////////////////////////////////////////
	// update composer view
	function updateMember($no) {

        $this->load->view('aiceo/head');
        $this->load->view('aiceo/sidebar');
		
	$members['nation'] = $this->topic_model->get_nation($this->uri->segment(3));
	$members['educadion'] = $this->topic_model->get_education($this->uri->segment(3));
	$members['majors'] = $this->topic_model->get_studyarea($this->uri->segment(3));
//	$members['label'] = $this->topic_model->get_publisher($this->uri->segment(3));
	$members['info'] = $this->topic_model->get_one_member($no);

        $this->load->view('aiceo/update_member', $members);

		$this->load->view('aiceo/footer');				
	}





	function artist() {

        $this->load->view('aiceo/head');
        $this->load->view('aiceo/sidebar');	

		$alles['all_artist'] = $this->topic_model->get_all_artist($this->uri->segment(3));
        $this->load->view('aiceo/artist_table', $alles);


		$this->load->view('aiceo/footer');				
		
	}

	function composers() {

        $this->load->view('aiceo/head');
        $this->load->view('aiceo/sidebar');	

		$alles['all_composers'] = $this->topic_model->get_all_composers();
        $this->load->view('aiceo/composer_table', $alles);


		$this->load->view('aiceo/footer');				
		
	}

	function members() {

	        $this->load->view('aiceo/head');
	        $this->load->view('aiceo/sidebar');	

		$alles['all_members'] = $this->topic_model->get_all_members($this->uri->segment(3));
	        $this->load->view('aiceo/membership_table', $alles);
		$this->load->view('aiceo/footer');				
	
	}


	function onlineCourses() {

	        $this->load->view('aiceo/head');
	        $this->load->view('aiceo/sidebar');	

		$alles['all_OCourses'] = $this->topic_model->get_all_onlinecourses($this->uri->segment(3));
	        $this->load->view('aiceo/onlineCourse_table', $alles);
		$this->load->view('aiceo/footer');

	}


	//////////////////////////////////////////////////////////////////////////
	// add new album process
	function add_new_record()
	{

			$front_image		=	$_FILES['front_image']['name'];
			$back_image			=	$_FILES['back_image']['name'];
			$width = "240";
			$height = "240";

			if ($front_image)	{	//���� ÷�ΰ� ������ 

				$uploaddir = 'D:/xampp/htdocs/resources/opus/ds/album_image/';			//Directory which includes images of components
				$dir	= $uploaddir;
				$files	= scandir($dir);
				
//				echo (file_exists($uploaddir) && is_dir($uploaddir)) ? '<br>Directory path ok<br>' : '<br>Directory does not exist<br>';

				if (is_uploaded_file($_FILES['front_image']['tmp_name'])) {
					$front_image  = $_FILES['front_image']['name']; 

					$front_image	 = explode(".", $front_image);
					$front_image[0]	 = date("Y-m-d_h_i_s") . "-front.";
					$file_ext_fr			= $front_image[1];
					$front_image_ = "$front_image[0]$file_ext_fr";

					$uploaddir  = $uploaddir . $front_image_; 
					$tempname	= $_FILES['front_image']['tmp_name']; 

					$result = move_uploaded_file($_FILES['front_image']['tmp_name'],$uploaddir);

					if ($result != 1)  {
						echo "<script language='javascript'>alert('$front_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
						exit;
					} 


				} 

			}


			if ($back_image)	{	//���� ÷�ΰ� ������ 

				$uploaddir = 'D:/xampp/htdocs/resources/opus/ds/album_image/';			//Directory which includes images of components
				$dir	= $uploaddir;
				$files	= scandir($dir);
				
//				echo (file_exists($uploaddir) && is_dir($uploaddir)) ? '<br>Directory path ok<br>' : 'Directory does not exist';

				if (is_uploaded_file($_FILES['back_image']['tmp_name'])) {
					$back_image  = $_FILES['back_image']['name']; 

					$back_image	=	explode(".", $back_image);
					$back_image[0]	 = date("Y-m-d_h_i_s") . "-back.";
					$file_ext_bk			= $back_image[1];
					$back_image_ = "$back_image[0]$file_ext_bk";

					$uploaddir  = $uploaddir . $back_image_; 
					$tempname	= $_FILES['back_image']['tmp_name']; 

					$result = move_uploaded_file($_FILES['back_image']['tmp_name'],$uploaddir);

					if ($result != 1)  {
						echo "<script language='javascript'>alert('$back_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
						exit;
					} 

				} 

			}

		$this->load->helper('date');
		$data = array(
			'album_name'		=> $this->input->post('album_names'),
			'album_ko_name'		=> $this->input->post('album_ko_name'),
			'genre'			=> $this->input->post('genre'),
			'album_kinds'		=> $this->input->post('album_kinds'),
			'featured'		=> $this->input->post('featured'),
			'sale_date'		=> $this->input->post('sale_date'),
			'record_company'	=> $this->input->post('record_company'),
			'run_time'		=> $this->input->post('run_time'),
			'artist_info'		=> $this->input->post('artist_info'),
			'comp_info'		=> $this->input->post('comp_info'),
			'recom'			=> $this->input->post('recom'),
			'record_method'		=> $this->input->post('record_method'),
			'album_price'		=> $this->input->post('album_price'),
			'album_quota'		=> $this->input->post('album_quota'),
			'quota_size'		=> $this->input->post('quota_size'),
			'catalog_no'		=> $this->input->post('catalog_no'),
			//'track_cnt'		=> $this->input->post('cd_no_track_cnt'),
			'added_date'		=> date('Y-m-d h:i:s'),
			'file_name1'		=> $front_image_,
			'file_name2'		=> $back_image_,
			'description'		=> $this->input->post('description')
		);
		$id = $this->register_model->insert_album_info($data);
		if ($id > 0) 
		{
			$this->session->set_flashdata('album_msg', 'New record has been successfully added.');
			$this->load->helper('url');
			redirect('/aiceo/albums');				
		}
		else
		{
			$this->session->set_flashdata('album_msg', 'New record has not been successfully added.');
			$this->load->helper('url');
			redirect('/aiceo/albums');						
		}
	}


	function add_new_course() {

		$front_image		=	$_FILES['front_image']['name'];
		//$width = "240";
		$height = "240";

		if ($front_image)	{

			//$uploaddir = 'D:/xampp/htdocs/resources/opus/ds/album_image/';			//Directory which includes images of components
			
			$uploaddir = 'D:/xampp/htdocs/resources/aic/uploads/';			//Image directory which is based on the windows
			$dir	= $uploaddir;
			$files	= scandir($dir);
			
			echo (file_exists($uploaddir) && is_dir($uploaddir)) ? '<br>Directory path ok<br>' : '<br>Directory does not exist<br>';

			if (is_uploaded_file($_FILES['front_image']['tmp_name'])) {
				$front_image  = $_FILES['front_image']['name']; 

				$front_image	 = explode(".", $front_image);
				$front_image[0]	 = date("Y-m-d_h_i_s") . "-front.";
				$file_ext_fr	 = $front_image[1];
				$front_image_ = "$front_image[0].$file_ext_fr";

				$uploaddir  = $uploaddir . $front_image_; 
				$tempname	= $_FILES['front_image']['tmp_name']; 

				$result = move_uploaded_file($_FILES['front_image']['tmp_name'],$uploaddir);

				if ($result != 1)  {
					echo "<script language='javascript'>alert('$front_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
					exit;
				} 


			} 

		}

		$this->load->helper('date');
		$data = array(
		    	'title'		=> $this->input->post('title'),
				'title_slug' => $this->input->post('title_slug'),
				'course_code' => $this->input->post('course_code'),
		    	'content'	=> $this->input->post('message'),
		    	'on_air_day'	=> $this->input->post('on_air_day'),
		    	'open_type'	=> $this->input->post('open_type'),
		    	'class_time'	=> $this->input->post('class_time'),
		    	'class_time_type'	=> $this->input->post('class_time_type'),
		    	'duration'	=> $this->input->post('duration'),
		    	'register_date'	=> $this->input->post('register_date'),
		    	//'added_date'	=> date('Y-m-d_h_i_s'),
		    	'file_name1'	=> $front_image_
		);

		$id = $this->register_model->insert_new_course($data);
		if ($id > 0) 
		{
			$this->session->set_flashdata('data_inserted', 'New Course has been posted!');
			$this->load->helper('url');
			redirect('/aiceo/onlineCourses');				
		}
		else
		{
			$this->session->set_flashdata('data_inserted', 'New data posting has been failed!');
			$this->load->helper('url');
			redirect('/aiceo/onlineCourses');						
		}

	}

	function update_course() {

		$num_course			=	$this->input->post('num_course');
		$old_front_img		=	$this->input->post('old_front_image');
		$front_image		=	$_FILES['front_image']['name'];
		$width = "240";
		$height = "240";

		if (!$front_image)	{
			$front_image_ = $old_front_img;
		}else{

			$uploaddir = 'D:/xampp/htdocs/resources/aic/uploads/';			//Directory which includes images of components
			$dir	= $uploaddir;
			$files	= scandir($dir);
			
			if ($old_front_img) {
				if (file_exists($uploaddir.$old_front_img)) { unlink($uploaddir.$old_front_img); }	
			}

			if (is_uploaded_file($_FILES['front_image']['tmp_name'])) {
				$front_image  = $_FILES['front_image']['name']; 

				$front_image	 = explode(".", $front_image);
				$front_image[0]	 = date("Y-m-d_h_i_s") . "-front.";
				$file_ext_fr	 = $front_image[1];
				$front_image_ = "$front_image[0].$file_ext_fr";

				$uploaddir  = $uploaddir . $front_image_; 
				$tempname	= $_FILES['front_image']['tmp_name']; 

				$result = move_uploaded_file($_FILES['front_image']['tmp_name'],$uploaddir);

				if ($result != 1)  {
					echo "<script language='javascript'>alert('$front_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
					exit;
				} 


			} 

		}
		$this->load->helper('date');
		$data = array(
			'title'				=> $this->input->post('title'),
			'content'	 		=> $this->input->post('message'),
			'on_air_day' 		=> $this->input->post('on_air_day'),
			'open_type' 		=> $this->input->post('open_type'),
			'class_time' 		=> $this->input->post('class_time'),
			'duration'  		=> $this->input->post('duration'),
			'register_date'		=> $this->input->post('register_date'),
			'file_name1'		=> $front_image_
/*
			echo "hidden_number:".$course_no."<br/>";
			echo "title:".$title."<br/>";
			echo "message_body:".$message."<br/>";
			echo "course_status:".$on_air_day."<br/>";
			echo "course_progress:".$open_type."<br/>";
			echo "course_time:".$class_time."<br/>";
			echo "course_length:".$duration."<br/>";
			echo "date:".$register_date."<br/>";	
			echo "image: ".$front_image."<br/>";	
			exit();
*/
		);
		$id = $this->register_model->update_online_course($data, $num_course);
		if ($id > 0) 
		{
			$this->session->set_flashdata('Online Course', 'Course information has been successfully updated.');
			$this->load->helper('url');
			redirect('/aiceo/onlineCourses');				
		}
		else
		{
			$this->session->set_flashdata('Online Course', 'Course information has not been successfully updated.');
			$this->load->helper('url');
			redirect('/aiceo/onlineCourses');						
		}

	}

	function get_label() {


		header("Content-Type: application/json");

		$cities = array("Miramar","Virgin Classics","Opus Arte","EMI Classics","Decca","Synara Records","BMG Rights Management","Sony BMG Music Entertainment","BIS Records","Profil Hanssler Records","Archiv","Analekta classical record","Warner Music Group","Teldec Records","RCA Records","Deutsche Grammophon","PhilipsRecords","BBC Music","Telarc International Corporation","Brilliant Classics","Eroica Classical Recordings","Challenge Records","MoirFortepiano Duo","ATMA Classique","Pilz GmbH & Co. Music KG.","Regis Records","Etcetera Records ","MDG Musikproduktion","Zig-Zag erritoires","Unicorn Records Ltd.","Cedille Records","Unitel Classica","RCO Live Records","Mercury Records","Ondine Records","Ars Production","Decadance records","Biddulph Recordings","Hyperion Records","Naxos Records","CPO Records","Vanguard Classics","Allegro Records","Gala Import Records","Harmonia Mundi Records","Danacord Records","Suisa Records","Ricordi Records","Erato records","Testament Records","Rhino Records","Foghorn Classics","Phantom Sound & Vision","Alia Vox","Zerod Records","PolyGram Records","DOREMI Records","Palatine  Recordings","JQUIR Records","Classic Wilesy","DR Dec","RTBF Records","BCA Victory","England Fear Semplie","Thomas Shepard","Pierre Verany","MATOS","Cyrie Deria","Ulban Belre","Atti Classics","Membran Music","Numerique Digital","Klavier Records","ONYX Records","Color Music Records","LaserLicht","Cascade Records","Norway Music","DAS Kulter","Elektra Records","TACET records","Red Seal records","Bongiovanni","Berlin Classics","BECCA","Holland Records","Dynamic Italy","Guild Records","Reviv Records","Eurodisc Records","Orfeon Records","Replay Records","Claves Records","Delos Records","Angel Records","Ermitage Records","Naive Records","Living Stereo","Encore records","Divina Records","Atlantic/Wea Records","Chandos Records","Pentatone","Vanguard Classics","ABC Classics","Chesky Records","PID Records","REE Digital","King Records","RMG Records");

		$term = $_POST['term'];

		$result = [];
		foreach($cities as $city) {
			if(strpos($city, $term) !== false) {
				$result[] = array("label" => $city, "value" => $city);
			}
		}
		echo json_encode($result);

	}


	function updateAlbumInformation() {

			$key_catalog_no		=	$this->input->post('catalog_no');
			$old_front_img		=	$this->input->post('old_front_image');
			$old_back_img		=	$this->input->post('old_back_image');
			$front_image		=	$_FILES['front_image']['name'];
			$back_image		=	$_FILES['back_image']['name'];
			$width = "240";
			$height = "240";

			if (!$front_image)	{	//���� ÷�ΰ� ������ 
				$front_image_ = $old_front_img;
			}else{

				$uploaddir = 'D:/xampp/htdocs/resources/opus/ds/album_image/';			//Directory which includes images of components
				$dir	= $uploaddir;
				$files	= scandir($dir);
				
				if ($old_front_img) {
					if (file_exists($uploaddir.$old_front_img)) { unlink($uploaddir.$old_front_img); }	
				}

				if (is_uploaded_file($_FILES['front_image']['tmp_name'])) {
					$front_image  = $_FILES['front_image']['name']; 

					$front_image	 = explode(".", $front_image);
					$front_image[0]	 = date("Y-m-d_h_i_s") . "-front.";
					$file_ext_fr			= $front_image[1];
					$front_image_ = "$front_image[0]$file_ext_fr";

					$uploaddir  = $uploaddir . $front_image_; 
					$tempname	= $_FILES['front_image']['tmp_name']; 

					$result = move_uploaded_file($_FILES['front_image']['tmp_name'],$uploaddir);

					if ($result != 1)  {
						echo "<script language='javascript'>alert('$front_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
						exit;
					} 


				} 

			}



			

			if (!$back_image)	{	//���� ÷�ΰ� ������ 
				$back_image_ = $old_back_img;
			}else{

				$uploaddir = 'D:/xampp/htdocs/resources/opus/ds/album_image/';			//Directory which includes images of components
				$dir	= $uploaddir;
				$files	= scandir($dir);
				
				if ($old_back_img) {
					if (file_exists($uploaddir.$old_back_img)) { unlink($uploaddir.$old_back_img); }	
				}

				if (is_uploaded_file($_FILES['back_image']['tmp_name'])) {
					$back_image  = $_FILES['back_image']['name']; 

					$back_image	=	explode(".", $back_image);
					$back_image[0]	 = date("Y-m-d h_i_s") . "-back.";
					$file_ext_bk			= $back_image[1];
					$back_image_ = "$back_image[0]$file_ext_bk";

					$uploaddir  = $uploaddir . $back_image_; 
					$tempname	= $_FILES['back_image']['tmp_name']; 

					$result = move_uploaded_file($_FILES['back_image']['tmp_name'],$uploaddir);

					if ($result != 1)  {
						echo "<script language='javascript'>alert('$back_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
						exit;
					} 

				} 

			}


			$this->load->helper('date');
			$data = array(
				'album_name'		=> $this->input->post('album_names'),
				'album_ko_name'		=> $this->input->post('album_ko_name'),
				'title_slug'		=> $this->input->post('title_slug'),
				'genre'				=> $this->input->post('genre'),
				'album_kinds'		=> $this->input->post('album_kinds'),
				'featured'			=> $this->input->post('featured'),
				'sale_date'			=> $this->input->post('sale_date'),
				'record_company'	=> $this->input->post('record_company'),
				'run_time'			=> $this->input->post('run_time'),
				'artist_info'		=> $this->input->post('artist_info'),
				'comp_info'			=> $this->input->post('comp_info'),
				'recom'				=> $this->input->post('recom'),
				'record_method'		=> $this->input->post('record_method'),
				'album_price'		=> $this->input->post('album_price'),
				'album_quota'		=> $this->input->post('album_quota'),
				'quota_size'		=> $this->input->post('quota_size'),
				'catalog_no'		=> $this->input->post('catalog_no'),
				//'track_cnt'			=> $this->input->post('cd_no_track_cnt'),
				'file_name1'		=> $front_image_,
				'file_name2'		=> $back_image_,
				'description'		=> $this->input->post('description')
			);
			$id = $this->register_model->update_album_info($data, $key_catalog_no);
			if ($id > 0) 
			{
				$this->session->set_flashdata('album_msg', 'Album information has been successfully updated.');
				$this->load->helper('url');
				redirect('/aiceo/albums');				
			}
			else
			{
				$this->session->set_flashdata('album_msg', 'Album information has not been successfully updated.');
				$this->load->helper('url');
				redirect('/aiceo/albums');						
			}
			

	}


	function updateTrackSubmit() {
		$al_name				=	$this->input->post('al_name');	# for get method parameter to forward to track list page
		$song_slug_value		=	$this->input->post('song_uno');
		$album_code_value		=	$this->input->post('album_code');

		$this->load->helper('date');
		$data = array(
			'track_title'		=> $this->input->post('song_title'),
			'title_slug'		=> $this->input->post('song_slug'),
			'genre_detail'		=> $this->input->post('genre_detail'),
			#'price'				=> $this->input->post('price'),
			'record_company'	=> $this->input->post('record_company'),
			'featured_musician'	=> $this->input->post('featured_musician'),
			'composer'			=> $this->input->post('composer'),
			'lyrics'			=> $this->input->post('lyrics')
		);
		$id = $this->register_model->update_Track_info($data, $song_slug_value, $album_code_value);
		if ($id > 0) 
		{
			#$this->session->set_flashdata('track_updated_msg', 'Track detail has been successfully updated.');
			$this->load->helper('url');
			redirect('/aiceo/all_tracks_detail/'.$album_code_value.'?menu=sound_track&al_code='.$album_code_value.'&al_name='.$al_name);				
		}
		else
		{
			#$this->session->set_flashdata('track_updated_msg', 'Track detail has not been successfully updated.');
			$this->load->helper('url');
			redirect('/aiceo/all_tracks_detail/'.$album_code_value.'?menu=sound_track&al_code='.$album_code_value.'&al_name='.$al_name);					
		}

	}




	function updateArtistInformation() {

			$key_performer_no	=	$this->input->post('performer_no');
			$old_front_img		=	$this->input->post('old_front_image');
			$old_back_img		=	$this->input->post('old_back_image');
			$front_image		=	$_FILES['front_image']['name'];
			$back_image			=	$_FILES['back_image']['name'];
			$width = "240";
			$height = "240";

			if (!$front_image)	{	//���� ÷�ΰ� ������ 
				$front_image_ = $old_front_img;
			}else{

				$uploaddir = 'D:/xampp/htdocs/resources/opus/ds/artist_image/';			//Directory which includes images of components
				$dir	= $uploaddir;
				$files	= scandir($dir);
				
				if ($old_front_img) {
					if (file_exists($uploaddir.$old_front_img)) { unlink($uploaddir.$old_front_img); }	
				}

				if (is_uploaded_file($_FILES['front_image']['tmp_name'])) {
					$front_image  = $_FILES['front_image']['name']; 

					$front_image	 = explode(".", $front_image);
					$front_image[0]	 = date("Y-m-d_h_i_s") . "-front.";
					$file_ext_fr			= $front_image[1];
					$front_image_ = "$front_image[0]$file_ext_fr";

					$uploaddir  = $uploaddir . $front_image_; 
					$tempname	= $_FILES['front_image']['tmp_name']; 

					$result = move_uploaded_file($_FILES['front_image']['tmp_name'],$uploaddir);

					if ($result != 1)  {
						echo "<script language='javascript'>alert('$front_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
						exit;
					} 

				} 

			}

			if (!$back_image)	{	//���� ÷�ΰ� ������ 
				$back_image_ = $old_back_img;
			}else{

				$uploaddir = 'D:/xampp/htdocs/resources/opus/ds/artist_image/';			//Directory which includes images of components
				$dir	= $uploaddir;
				$files	= scandir($dir);
				
				if ($old_back_img) {
					if (file_exists($uploaddir.$old_back_img)) { unlink($uploaddir.$old_back_img); }	
				}

				if (is_uploaded_file($_FILES['back_image']['tmp_name'])) {
					$back_image  = $_FILES['back_image']['name']; 

					$back_image	=	explode(".", $back_image);
					$back_image[0]	 = date("Y-m-d_h_i_s") . "-back.";
					$file_ext_bk			= $back_image[1];
					$back_image_ = "$back_image[0]$file_ext_bk";

					$uploaddir  = $uploaddir . $back_image_; 
					$tempname	= $_FILES['back_image']['tmp_name']; 

					$result = move_uploaded_file($_FILES['back_image']['tmp_name'],$uploaddir);

					if ($result != 1)  {
						echo "<script language='javascript'>alert('$back_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
						exit;
					} 

				} 

			}


		$this->load->helper('date');
		$data = array(
			'performer_no'		=> $key_performer_no,
			'first_name'		=> $this->input->post('first_name'),
			'last_name'			=> $this->input->post('last_name'),
			'nation'			=> $this->input->post('nation'),
			'education'			=> $this->input->post('education'),
			'job'				=> $this->input->post('job'),
			'life_period_start'	=> $this->input->post('life_period_start'),
			'life_period_end'	=> $this->input->post('life_period_end'),
			'live_flag'			=> $this->input->post('live_flag'),
			'content'			=> $this->input->post('content'),
			'file_name1'		=> $front_image_,
			'file_name2'		=> $back_image_
		);
		$id = $this->register_model->update_artist_info($data, $key_performer_no);
		if ($id > 0) 
		{
			$this->session->set_flashdata('artist_msg', 'New artist has been successfully added.');
			$this->load->helper('url');
			redirect('/aiceo/artist');				
		}
		else
		{
			$this->session->set_flashdata('artist_msg', 'New artist has not been successfully added.');
			$this->load->helper('url');
			redirect('/aiceo/artist');						
		}		

	}



	function updateCompserInformation() {

			$key_comp_no		=	$this->input->post('uno');
			$birth_date			=	$this->input->post('birth_date');
			$birth_pieces = explode("-", $birth_date);
			$birth_month	= $birth_pieces[0];
			$birth_day		= $birth_pieces[1];
			$birth_year		= $birth_pieces[2];
			$death_date			=	$this->input->post('death_date');
			$death_pieces = explode("-", $death_date);
			$death_month	= $death_pieces[0];
			$death_day		= $death_pieces[1];
			$death_year		= $death_pieces[2];
			$old_front_img		=	$this->input->post('old_front_image');
			$old_back_img		=	$this->input->post('old_back_image');
			$front_image		=	$_FILES['front_image']['name'];
			$back_image			=	$_FILES['back_image']['name'];
			$width = "240";
			$height = "240";

			if (!$front_image)	{	//���� ÷�ΰ� ������ 
				$front_image_ = $old_front_img;
			}else{

				$uploaddir = 'D:/xampp/htdocs/resources/opus/ds/comp_image/';			//Directory which includes images of components
				$dir	= $uploaddir;
				$files	= scandir($dir);
				
				if ($old_front_img) {
					if (file_exists($uploaddir.$old_front_img)) { unlink($uploaddir.$old_front_img); }	
				}

				if (is_uploaded_file($_FILES['front_image']['tmp_name'])) {
					$front_image  = $_FILES['front_image']['name']; 

					$front_image	 = explode(".", $front_image);
					$front_image[0]	 = date("Y-m-d_h_i_s") . "-composer1.";
					$file_ext_fr			= $front_image[1];
					$front_image_ = "$front_image[0]$file_ext_fr";

					$uploaddir  = $uploaddir . $front_image_; 
					$tempname	= $_FILES['front_image']['tmp_name']; 

					$result = move_uploaded_file($_FILES['front_image']['tmp_name'],$uploaddir);

					if ($result != 1)  {
						echo "<script language='javascript'>alert('$front_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
						exit;
					} 

				} 

			}

			if (!$back_image)	{	//���� ÷�ΰ� ������ 
				$back_image_ = $old_back_img;
			}else{

				$uploaddir = 'D:/xampp/htdocs/resources/opus/ds/comp_image/';			//Directory which includes images of components
				$dir	= $uploaddir;
				$files	= scandir($dir);
				
				if ($old_back_img) {
					if (file_exists($uploaddir.$old_back_img)) { unlink($uploaddir.$old_back_img); }	
				}

				if (is_uploaded_file($_FILES['back_image']['tmp_name'])) {
					$back_image  = $_FILES['back_image']['name']; 

					$back_image	=	explode(".", $back_image);
					$back_image[0]	 = date("Y-m-d_h_i_s") . "-composer2.";
					$file_ext_bk			= $back_image[1];
					$back_image_ = "$back_image[0]$file_ext_bk";

					$uploaddir  = $uploaddir . $back_image_; 
					$tempname	= $_FILES['back_image']['tmp_name']; 

					$result = move_uploaded_file($_FILES['back_image']['tmp_name'],$uploaddir);

					if ($result != 1)  {
						echo "<script language='javascript'>alert('$back_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
						exit;
					} 

				} 

			}


		$this->load->helper('date');
		$data = array(
			'uno'				=> $key_comp_no,
			'first_name'		=> $this->input->post('first_name'),
			'last_name'			=> $this->input->post('last_name'),
			'url_slug'			=> $this->input->post('fullname_slug'),
			'nation'			=> $this->input->post('nation'),
			'education'			=> $this->input->post('education'),
			'job'				=> $this->input->post('job'),
			'birth_date'		=> $this->input->post('birth_date'),
			'death_date'		=> $this->input->post('death_date'),
			'live_flag'			=> $this->input->post('live_flag'),
			'content'			=> $this->input->post('message'),
			'file_name1'		=> $front_image_,
			'file_name2'		=> $back_image_,
			'added_date'		=> date('Y-m-d h:i:s')
		);
		$id = $this->register_model->update_composer_info($data, $key_comp_no);
		if ($id > 0) 
		{
			$this->session->set_flashdata('composer_msg', 'New composer has been successfully updated.');
			$this->load->helper('url');
			redirect('/aiceo/composers');				
		}
		else
		{
			$this->session->set_flashdata('artist_msg', 'New composer has not been successfully updated.');
			$this->load->helper('url');
			redirect('/aiceo/composers');						
		}		

	}


	function updateMemberInformation() {

			$key_uno		=	$this->input->post('uno');
			$old_front_img		=	$this->input->post('old_front_image');
			$front_image		=	$_FILES['front_image']['name'];
			$width = "240";
			$height = "240";

			if (!$front_image)	{	//���� ÷�ΰ� ������ 
				$front_image_ = $old_front_img;
			}else{

				$uploaddir = 'D:/xampp/htdocs/resources/opus/ds/member_image/';			//Directory which includes images of components
				$dir	= $uploaddir;
				$files	= scandir($dir);
				
				if ($old_front_img) {
					if (file_exists($uploaddir.$old_front_img)) { unlink($uploaddir.$old_front_img); }	
				}

				if (is_uploaded_file($_FILES['front_image']['tmp_name'])) {
					$front_image  = $_FILES['front_image']['name']; 

					$front_image	 = explode(".", $front_image);
					$front_image[0]	 = date("Y-m-d_h_i_s") . "-front.";
					$file_ext_fr			= $front_image[1];
					$front_image_ = "$front_image[0]$file_ext_fr";

					$uploaddir  = $uploaddir . $front_image_; 
					$tempname	= $_FILES['front_image']['tmp_name']; 

					$result = move_uploaded_file($_FILES['front_image']['tmp_name'],$uploaddir);

					if ($result != 1)  {
						echo "<script language='javascript'>alert('$front_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
						exit;
					} 

				} 

			}


		$this->load->helper('date');
		$data = array(
			'firstname'			=> $this->input->post('first_name'),
			'lastname'			=> $this->input->post('last_name'),
			'nation'			=> $this->input->post('nation'),
			'company_school'	=> $this->input->post('institute'),
			'position_status'	=> $this->input->post('edu_status'),
			'study_area'		=> $this->input->post('major_study'),
			'birthday'			=> $this->input->post('birthday'),
			'job'				=> $this->input->post('jobs'),
			'file_name1'		=> $front_image_
		);
		$id = $this->register_model->update_member_info($data, $key_uno);
		if ($id > 0) 
		{
			$this->session->set_flashdata('artist_msg', 'New member has been successfully added.');
			$this->load->helper('url');
			redirect('/aiceo/members');				
		}
		else
		{
			$this->session->set_flashdata('artist_msg', 'New member has not been successfully added.');
			$this->load->helper('url');
			redirect('/aiceo/members');						
		}		

	}


	//////////////////////////////////////////////////////////////////////////
	// add new artist process
	function add_new_artist()
	{

			$front_image		=	$_FILES['front_image']['name'];
			$back_image			=	$_FILES['back_image']['name'];
			$width = "240";
			$height = "240";

			if ($front_image)	{	//���� ÷�ΰ� ������ 

				$uploaddir = 'D:/xampp/htdocs/resources/opus/ds/artist_image/';			//Directory which includes images of components
				$dir	= $uploaddir;
				$files	= scandir($dir);
				
//				echo (file_exists($uploaddir) && is_dir($uploaddir)) ? '<br>Directory path ok<br>' : '<br>Directory does not exist<br>';

				if (is_uploaded_file($_FILES['front_image']['tmp_name'])) {
					$front_image  = $_FILES['front_image']['name']; 

					$front_image	 = explode(".", $front_image);
					$front_image[0]	 = date("Y-m-d_h_i_s") . "-front.";
					$file_ext_fr			= $front_image[1];
					$front_image_ = "$front_image[0]$file_ext_fr";

					$uploaddir  = $uploaddir . $front_image_; 
					$tempname	= $_FILES['front_image']['tmp_name']; 

					$result = move_uploaded_file($_FILES['front_image']['tmp_name'],$uploaddir);

					if ($result != 1)  {
						echo "<script language='javascript'>alert('$front_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
						exit;
					} 


				} 

			}

			if ($back_image)	{	//���� ÷�ΰ� ������ 

				$uploaddir = 'D:/xampp/htdocs/resources/opus/ds/artist_image/';			//Directory which includes images of components
				$dir	= $uploaddir;
				$files	= scandir($dir);
				
//				echo (file_exists($uploaddir) && is_dir($uploaddir)) ? '<br>Directory path ok<br>' : 'Directory does not exist';

				if (is_uploaded_file($_FILES['back_image']['tmp_name'])) {
					$back_image  = $_FILES['back_image']['name']; 

					$back_image	=	explode(".", $back_image);
					$back_image[0]	 = date("Y-m-d_h_i_s") . "-back.";
					$file_ext_bk			= $back_image[1];
					$back_image_ = "$back_image[0]$file_ext_bk";

					$uploaddir  = $uploaddir . $back_image_; 
					$tempname	= $_FILES['back_image']['tmp_name']; 

					$result = move_uploaded_file($_FILES['back_image']['tmp_name'],$uploaddir);

					if ($result != 1)  {
						echo "<script language='javascript'>alert('$back_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
						exit;
					} 

				} 

			}

		$max_uno = $this->topic_model->get_max_uno($this->uri->segment(3));
		$maxuno = $max_uno->uno+1;
		$this->load->helper('date');
		$data = array(
			'performer_no'		=> $maxuno,
			'first_name'		=> $this->input->post('first_name'),
			'last_name'			=> $this->input->post('last_name'),
			'nation'			=> $this->input->post('nation'),
			'education'			=> $this->input->post('education'),
			'job'				=> $this->input->post('job'),
			'life_period_start'	=> $this->input->post('life_period_start'),
			'life_period_end'	=> $this->input->post('life_period_end'),
			'live_flag'			=> $this->input->post('live_flag'),
			'content'			=> $this->input->post('content'),
			'file_name1'		=> $front_image_,
			'file_name2'		=> $back_image_,
			'added_date'		=> date('Y-m-d_h_i_s')
		);
		$id = $this->register_model->insert_artist_info($data);
		if ($id > 0) 
		{
			$this->session->set_flashdata('artist_msg', 'New artist has been successfully added.');
			$this->load->helper('url');
			redirect('/aiceo/artist');				
		}
		else
		{
			$this->session->set_flashdata('artist_msg', 'New artist has not been successfully added.');
			$this->load->helper('url');
			redirect('/aiceo/artist');						
		}
	}



	//////////////////////////////////////////////////////////////////////////
	// add new artist process
	function add_new_composer()
	{

			$front_image		=	$_FILES['front_image']['name'];
			$back_image			=	$_FILES['back_image']['name'];
			$width = "240";
			$height = "240";

			if ($front_image)	{	//���� ÷�ΰ� ������ 

				$uploaddir = 'D:/xampp/htdocs/resources/opus/ds/comp_image/';			//Directory which includes images of components
				$dir	= $uploaddir;
				$files	= scandir($dir);
				
//				echo (file_exists($uploaddir) && is_dir($uploaddir)) ? '<br>Directory path ok<br>' : '<br>Directory does not exist<br>';

				if (is_uploaded_file($_FILES['front_image']['tmp_name'])) {
					$front_image  = $_FILES['front_image']['name']; 

					$front_image	 = explode(".", $front_image);
					$front_image[0]	 = date("Y-m-d_h_i_s") . "-front.";
					$file_ext_fr			= $front_image[1];
					$front_image_ = "$front_image[0]$file_ext_fr";

					$uploaddir  = $uploaddir . $front_image_; 
					$tempname	= $_FILES['front_image']['tmp_name']; 

					$result = move_uploaded_file($_FILES['front_image']['tmp_name'],$uploaddir);

					if ($result != 1)  {
						echo "<script language='javascript'>alert('$front_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
						exit;
					} 


				} 

			}

			if ($back_image)	{	//���� ÷�ΰ� ������ 

				$uploaddir = 'D:/xampp/htdocs/resources/opus/ds/comp_image/';			//Directory which includes images of components
				$dir	= $uploaddir;
				$files	= scandir($dir);
				
//				echo (file_exists($uploaddir) && is_dir($uploaddir)) ? '<br>Directory path ok<br>' : 'Directory does not exist';

				if (is_uploaded_file($_FILES['back_image']['tmp_name'])) {
					$back_image  = $_FILES['back_image']['name']; 

					$back_image	=	explode(".", $back_image);
					$back_image[0]	 = date("Y-m-d_h_i_s") . "-back.";
					$file_ext_bk			= $back_image[1];
					$back_image_ = "$back_image[0]$file_ext_bk";

					$uploaddir  = $uploaddir . $back_image_; 
					$tempname	= $_FILES['back_image']['tmp_name']; 

					$result = move_uploaded_file($_FILES['back_image']['tmp_name'],$uploaddir);

					if ($result != 1)  {
						echo "<script language='javascript'>alert('$back_image_ File uploaded Failed! Try again later! Or contact to administrator!'); history.back();</script>";
						exit;
					} 

				} 

			}

		$max_uno = $this->topic_model->get_max_uno_composer($this->uri->segment(3));
		$maxuno = $max_uno->uno+1;
		$this->load->helper('date');
		$data = array(
			'uno'				=> $maxuno,
			'first_name'		=> $this->input->post('first_name'),
			'last_name'			=> $this->input->post('last_name'),
			'nation'			=> $this->input->post('nation'),
			'education'			=> $this->input->post('education'),
			'job'				=> $this->input->post('job'),
			'life_period_start'	=> $this->input->post('life_period_start'),
			'life_period_end'	=> $this->input->post('life_period_end'),
			'live_flag'			=> $this->input->post('live_flag'),
			'content'			=> $this->input->post('message'),
			'file_name1'		=> $front_image_,
			'file_name2'		=> $back_image_,
			'added_date'		=> date('Y-m-d_h_i_s')
		);
		$id = $this->register_model->insert_composer_info($data);
		if ($id > 0) 
		{
			$this->session->set_flashdata('composer_msg', 'New composer has been successfully added.');
			$this->load->helper('url');
			redirect('/aiceo/composers');				
		}
		else
		{
			$this->session->set_flashdata('composer_msg', 'New composer has not been successfully added.');
			$this->load->helper('url');
			redirect('/aiceo/composers');						
		}
	}



private function upload_front_image() {
		$status = "";
		$msg1 = "";
		if ($status != "error")
		{
			$config['upload_path'] = './upload/albums';                        
			$config['log_threshold'] = 1;
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '100000'; // 0 = no file size limit
			$config['overwrite'] = false;
			$config['file_name'] = date('Y-m-d_h_i_s')."_front";
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('front_image')) {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $error);
			} else {
				$data = $this->upload->data();
				$front_image = $data['file_name'];
				if ($front_image) {
					$msg1 = $front_image." Front file upload Success";
				}
			}
		}
}


private function upload_back_image() {
		$status = "";
		$msg2 = "";
		if ($status != "error")
		{
			$config['upload_path'] = './upload/albums';                        
			$config['log_threshold'] = 1;
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '100000'; // 0 = no file size limit
			$config['overwrite'] = false;
			$config['file_name'] = date('Y-m-d_h_i_s')."_back";
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('back_image')) {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $error);
			} else {
				$data = $this->upload->data();
				$back_image = $data['file_name'];
				if ($back_image) {
					$msg2 = $back_image." Back file upload Success";
				}
			}
		}
}








}
?>