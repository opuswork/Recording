<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Recording_details extends MY_Controller {

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
	public function more()
	{
		try {
			$this->_side_bar();
			$this->load->view('header');
			$topic['morels'] = $this->topic_model->get_all_songs_from_album($this->uri->segment(3));
            $topic['song_list_left'] = $this->topic_model->get_Songlist_from_album($this->uri->segment(3));
			$this->load->view('recording_details_index', $topic);
			$this->_player();
		} catch (Exception $e) {
			//alert the user then kill the process
			var_dump($e->getMessage());
			redirect('/');
		}
	}
}
?>