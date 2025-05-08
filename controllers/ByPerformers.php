<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class ByPerformers extends MY_Controller {

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
			$topic['featured_performers'] = $this->topic_model->get_featured_performers();
			$topic['top_performers'] = $this->topic_model->get_top_performers();	
			$this->load->view('by_performers_index', $topic);
			#$this->_footer();
			$this->_player();
		} catch (Exception $e) {
			//alert the user then kill the process
			var_dump($e->getMessage());
			redirect('/');
		}
	}

}
?>