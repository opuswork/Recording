<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Genres extends MY_Controller {

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
        #$user = $this->user_model->get($this->session->userdata('username'));
		$this->_side_bar();
        $this->load->view('header');
		$this->load->view('genre_index');
		#$this->_footer();
		$this->_player();
	}

}
?>