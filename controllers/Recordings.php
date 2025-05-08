<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Recordings extends MY_Controller {

    public function __construct()
    {       
        parent::__construct();
        
        $this->load->model('user_model');
		$this->load->model('topic_model');
//        log_message('debug', 'user initialize');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		try {
			#$user = $this->user_model->get($this->session->userdata('username'));
			#$this->load->view('header', array('user'=>$user));		
			$this->_side_bar();
			$this->load->view('header');
			$topic['popular_recordings'] = $this->topic_model->get_popular_recordings();
			#$topic['top_performers'] = $this->topic_model->get_top_performers();	
			$this->load->view('recordings_index', $topic);
			#$this->_footer();
			$this->_player();
		} catch (Exception $e) {
			//alert the user then kill the process
			var_dump($e->getMessage());
			redirect('/');
		}
	}

    public function load_more() {
		$page = $this->input->post('page');
		if (!$page || $page < 1) {
			$page = 1; // Default to the first page if page is not set or invalid
		}
		$limit = 20; // Number of items per page
		$offset = ($page - 1) * $limit;

		// Fetch albums from the model
		$data = $this->topic_model->get_albums($limit, $offset);

		echo json_encode($data);
	}	

}
?>