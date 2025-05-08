<?php
class Topic_model extends CI_Model {

    function __construct()
    {    	
        parent::__construct();
    }

    function get($topic_id){
        $this->db->select('id');
        $this->db->select('full_name');
        $this->db->select('email');
    	return $this->db->get_where('user', array('email'=>$topic_id))->row();
    }

    function get_featured_album(){
        $this->db->select('*');
		$this->db->order_by('uno','random');        
        $this->db->limit(12);
    	return $this->db->get_where('album_info', array('featured'=>'yes'))->result();
    }

    function get_temp_all_album(){
        $this->db->select('*');
		$this->db->order_by('uno','random');        
        $this->db->limit(20);
    	return $this->db->get_where('album_info', array('featured'=>'yes'))->result();
    }

////////////////////////////////////////////////////////
// Jukebox on Main page

    function get_music_bbs1(){
        $this->db->select('*');
		$this->db->order_by('num','random');        
        $this->db->limit(5);
    	$this->db->where('category', '01', 'both');
    	$this->db->or_like('category', '02', 'both');
    	$this->db->or_like('category', '03', 'both');
        return $this->db->get('music_bbs')->result();

    }

    function get_music_bbs2(){
        $this->db->select('*');
		$this->db->order_by('num','random');        
        $this->db->limit(5);
    	$this->db->where('category', '04', 'both');
    	$this->db->or_like('category', '05', 'both');
    	$this->db->or_like('category', '06', 'both');
        return $this->db->get('music_bbs')->result();
    }

    function get_music_bbs3(){
        $this->db->select('*');
		$this->db->order_by('num','random');        
        $this->db->limit(5);
    	$this->db->where('category', '07', 'both');
    	$this->db->or_like('category', '08', 'both');
    	$this->db->or_like('category', '09', 'both');
        return $this->db->get('music_bbs')->result();
    }

    function get_music_bbs4(){
        $this->db->select('*');
		$this->db->order_by('num','random');        
        $this->db->limit(5);
    	return $this->db->get_where('music_bbs', array('category'=>'14'))->result();
    }

    function get_music_bbs5(){
        $this->db->select('*');
		$this->db->order_by('num','random');        
        $this->db->limit(5);
    	$this->db->where('category', '10', 'both');
    	$this->db->or_like('category', '12', 'both');
    	$this->db->or_like('category', '13', 'both');
        return $this->db->get('music_bbs')->result();
    }

    function get_music_bbs6(){
        $this->db->select('*');
		$this->db->order_by('num','random');        
        $this->db->limit(5);
    	$this->db->where('category', '15', 'both');
    	$this->db->or_like('category', '16', 'both');
    	$this->db->or_like('category', '17', 'both');
        return $this->db->get('music_bbs')->result();
    }
// ---> Jukebox on Main page
/////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////
// Jukebox/freemusic

function get_freemusic_bbs1(){
	$this->db->select('*');
	$this->db->order_by('num','random');        
	$this->db->limit(5);
	$this->db->where('category', '01', 'both');
	$this->db->or_like('category', '02', 'both');
	$this->db->or_like('category', '03', 'both');
	return $this->db->get('music_bbs')->result();

}

function get_freemusic_bbs2(){
	$this->db->select('*');
	$this->db->order_by('num','random');        
	$this->db->limit(5);
	$this->db->where('category', '04', 'both');
	$this->db->or_like('category', '05', 'both');
	$this->db->or_like('category', '06', 'both');
	return $this->db->get('music_bbs')->result();
}

function get_freemusic_bbs3(){
	$this->db->select('*');
	$this->db->order_by('num','random');        
	$this->db->limit(5);
	$this->db->where('category', '07', 'both');
	$this->db->or_like('category', '08', 'both');
	$this->db->or_like('category', '09', 'both');
	return $this->db->get('music_bbs')->result();
}

function get_freemusic_bbs4(){
	$this->db->select('*');
	$this->db->order_by('num','random');        
	$this->db->limit(5);
	return $this->db->get_where('music_bbs', array('category'=>'14'))->result();
}

function get_freemusic_bbs5(){
	$this->db->select('*');
	$this->db->order_by('num','random');        
	$this->db->limit(5);
	$this->db->where('category', '10', 'both');
	$this->db->or_like('category', '12', 'both');
	$this->db->or_like('category', '13', 'both');
	return $this->db->get('music_bbs')->result();
}

function get_freemusic_bbs6(){
	$this->db->select('*');
	$this->db->order_by('num','random');        
	$this->db->limit(5);
	$this->db->where('category', '15', 'both');
	$this->db->or_like('category', '16', 'both');
	$this->db->or_like('category', '17', 'both');
	return $this->db->get('music_bbs')->result();
}

// Jukebox/freemusic
////////////////////////////////////////////////////////////////////////////


    function get_single_album($catalog_no){
        $this->db->select('*');
		$this->db->where('catalog_no', $catalog_no);
		//$this->db->where('album_kinds', $category);
		$query = $this->db->get('album_info');
		var_dump($query);
		exit;
    	return $query->result();
    }

	function get_trending_album() {
		$this->db->select('*');
		$this->db->order_by('recom','desc');
		$this->db->limit(10);
		$query=$this->db->get('album_info');
		return $query->result();
	}

//////////////////////////////////////////////////////////////////////////////////
// get_all_album() - aiceo
/////////////////////////////////////////////////////////////////////////////////
	function get_all_album() {
		$this->db->select('*');
		$this->db->order_by('uno','desc');
//		$this->db->limit(50);
		$query=$this->db->get('album_info');
		return $query->result();
	}

/*
=== SQL query statement start ===
SELECT album_info.album_name, album_info.artist_info, album_info.file_name1 as album_cover, track_info.track_title, track_info.album_code, track_info.cd_no, track_info.track_code, track_info.file_name1 as track_file
FROM track_info
LEFT OUTER JOIN album_info 
ON album_info.catalog_no = track_info.album_code
WHERE track_info.title_slug != NULL
ORDER BY track_info.album_code ASC
=== SQL Query statement end ===
*/

	function get_Songlist_from_album($code) {
		$this->db->select('album_info.album_name, album_info.artist_info, album_info.file_name1 as album_cover, track_info.track_title, track_info.title_slug, track_info.album_code, track_info.cd_no, track_info.track_code, track_info.file_name1 as track_file');
		$this->db->from('track_info');
		$this->db->join('album_info', 'album_info.catalog_no = track_info.album_code','left outer');
		$this->db->where('track_info.title_slug !=', "");
		$this->db->where('track_info.album_code', "$code");
		$this->db->order_by('track_info.track_code','asc');
		$this->db->limit(30);
		$query=$this->db->get();
		return $query->result();		
	}


	function get_Songs_in_the_list_left() {
		$this->db->select('album_info.album_name, album_info.artist_info, album_info.file_name1 as album_cover, track_info.track_title, track_info.title_slug, track_info.album_code, track_info.cd_no, track_info.track_code, track_info.file_name1 as track_file');
		$this->db->from('track_info');
		$this->db->join('album_info', 'album_info.catalog_no = track_info.album_code','left outer');
		$this->db->where('track_info.file_name1', "1");
		$this->db->order_by('track_info.album_code','asc');
		$this->db->limit(5);
		$query=$this->db->get();
		return $query->result();		
	}

	function get_Songs_in_the_list_right() {
		$this->db->select('album_info.album_name, album_info.artist_info, album_info.file_name1 as album_cover, track_info.track_title, track_info.title_slug, track_info.album_code, track_info.cd_no, track_info.track_code, track_info.file_name1 as track_file');
		$this->db->from('track_info');
		$this->db->join('album_info', 'album_info.catalog_no = track_info.album_code','left outer');
		$this->db->where('track_info.file_name1', "1");
		$this->db->order_by('track_info.album_code','desc');
		$this->db->limit(5);
		$query=$this->db->get();
		return $query->result();		
	}


	function get_all_track_per_album() {
		$this->db->select('album_info.album_name, album_info.artist_info, album_info.file_name1 as album_cover, track_info.track_title, track_info.title_slug, track_info.album_code, track_info.cd_no, track_info.track_code, track_info.file_name1 as track_file');
		$this->db->from('track_info');
		$this->db->join('album_info', 'album_info.catalog_no = track_info.album_code','left outer');
		$this->db->where('track_info.file_name1', "1");
		$this->db->order_by('track_info.album_code','asc');
		$this->db->limit(100);
		$query=$this->db->get();
		return $query->result();		
	}

	function get_all_songs_from_album($code) {
		$this->db->select('album_info.album_name, album_info.artist_info, album_info.file_name1 as album_cover, album_info.genre, album_info.record_company, album_info.comp_info, album_info.description, album_info.catalog_no, track_info.track_title, track_info.title_slug, track_info.album_code, track_info.cd_no, track_info.track_code, track_info.file_name1 as track_file');
		$this->db->from('track_info');
		$this->db->join('album_info', 'album_info.catalog_no = track_info.album_code','left outer');
		$this->db->where('album_info.catalog_no', "$code");
		#$this->db->order_by('album_info.catalog_no','asc');
		#$this->db->limit(100);
		$query=$this->db->get();
		#var_dump($this->db->last_query());exit;
		return $query->result();		
	}


/*
	function get_all_track_per_album() {
		$this->db->select('*');
		$this->db->order_by('track_code','asc');
		$this->db->limit(10);
		$query=$this->db->get('track_info');
		return $query->result();
	}
*/

	function get_popular_recordings() {
		$this->db->select('*');
		$this->db->order_by('uno','desc');
		$this->db->limit(30);
		$query=$this->db->get('album_info');
		return $query->result();
	}

    public function get_albums($limit, $offset) {
/*
		$this->db->limit($limit, $offset);
		$query = $this->db->get('album_info'); // Replace 'albums' with your table name

		return $query->result_array(); // Return as an associative array
*/
		$query = $this->db->limit($limit, $offset)->get('album_info');
		return $query->result();
	}

/*
example of LEFT OUTER JOIN for bring top 1 album track from tables album_info and track_info
*/

	function get_top_one_track() {
		$this->db->select('album_info.album_name, album_info.artist_info, album_info.comp_info, album_info.genre, album_info.record_company, album_info.file_name1 as album_cover, track_info.track_title, track_info.track_code, track_info.title_slug as song_slug, track_info.album_code, track_info.lyrics, track_info.price, track_info.file_name1 as track_file');
		$this->db->from('track_info');
		$this->db->join('album_info', 'album_info.catalog_no = track_info.album_code','left outer');
		$this->db->where('track_info.file_name1', "1");
		$this->db->order_by('track_info.album_code','asc');
		$this->db->limit(12);
		$query=$this->db->get();
		return $query->result();		
	}

	function get_top_one_track_in_aiceo() {
		$this->db->select('album_info.album_name, album_info.artist_info, album_info.comp_info, album_info.genre, album_info.record_company, album_info.file_name1 as album_cover, track_info.track_title, track_info.title_slug as song_slug, track_info.album_code, track_info.lyrics, track_info.price, track_info.file_name1 as track_file');
		$this->db->from('track_info');
		$this->db->join('album_info', 'album_info.catalog_no = track_info.album_code','left outer');
		$this->db->where('track_info.file_name1', "1");
		#$this->db->where('track_info.title_slug', "");
		$this->db->order_by('track_info.album_code','asc');
		#$this->db->limit(12, 24);
		$query=$this->db->get();
		return $query->result();		
	}	

	function get_top_one_track_of_all() {
		$this->db->select('album_info.album_name, album_info.artist_info, album_info.comp_info, album_info.genre, album_info.record_company, album_info.file_name1 as album_cover, track_info.track_title, track_info.title_slug as song_slug, track_info.album_code, track_info.lyrics, track_info.price, track_info.file_name1 as track_file');
		$this->db->from('track_info');
		$this->db->join('album_info', 'album_info.catalog_no = track_info.album_code','left outer');
		$this->db->where('track_info.file_name1', "1");
		$this->db->order_by('track_info.album_code','asc');
		$this->db->limit(30);
		$query=$this->db->get();
		return $query->result();		
	}

/* =================================
get_single_track_detail_opus()
====================================
SELECT album_info.album_name, album_info.artist_info, album_info.comp_info, album_info.genre, album_info.record_company, album_info.file_name1 as album_cover, track_info.track_title, track_info.title_slug as song_slug, track_info.album_code, track_info.lyrics, track_info.price, track_info.file_name1 as track_file
FROM track_info
LEFT OUTER JOIN album_info ON album_info.catalog_no = track_info.album_code
WHERE track_info.album_code = "1175725673"
ORDER BY track_info.track_code ASC
*/

	function get_single_track_detail($code) {
		$this->db->select('track_info.track_uno as uno, track_info.track_title, track_info.title_slug as song_slug, album_info.album_name as album_title, album_info.artist_info, album_info.record_company, album_info.genre, track_info.album_code, track_info.price, track_info.lyrics, album_info.file_name1 as front_cover, album_info.file_name2 as back_cover, album_info.artist_info, album_info.comp_info, track_info.file_name1 as track_file');
		$this->db->from('track_info');
		$this->db->join('album_info', 'album_info.catalog_no = track_info.album_code','left outer');
		$this->db->where('track_info.album_code', "$code");		
		$this->db->order_by('track_info.track_code','asc');
		$query=$this->db->get();
		#var_dump($this->db->last_query());exit;
		return $query->result();
	}

	function get_single_track_detail_opus($code) {
		$this->db->select('track_info.track_uno as uno, track_info.track_title, track_info.title_slug as song_slug, album_info.album_name as album_title, album_info.artist_info, album_info.record_company, album_info.genre, track_info.album_code, track_info.price, track_info.lyrics, album_info.file_name1 as front_cover, album_info.file_name2 as back_cover, album_info.artist_info, album_info.comp_info, track_info.file_name1 as track_file');
		$this->db->from('track_info');
		$this->db->join('album_info', 'album_info.catalog_no = track_info.album_code','left outer');
		$this->db->where('track_info.title_slug', "$code");		
		$this->db->order_by('track_info.track_code','asc');
		$query=$this->db->get();
		#var_dump($this->db->last_query());exit;
		return $query->result();
	}



	function get_single_track_details2($code) {
		$this->db->select('track_info.track_uno as uno, track_info.track_title, track_info.title_slug as song_slug, album_info.album_name as album_title, album_info.artist_info, album_info.record_company, album_info.genre, track_info.album_code, track_info.price, track_info.lyrics, album_info.file_name1 as front_cover, album_info.file_name2 as back_cover, album_info.artist_info, album_info.comp_info, track_info.file_name1 as track_file');
		$this->db->from('track_info');
		$this->db->join('album_info', 'album_info.catalog_no = track_info.album_code','left outer');
		$this->db->where('track_info.track_uno', "$code");		
		$query=$this->db->get();
		#var_dump($this->db->last_query());exit;
		return $query->result();
	}
/*
	function check_Null_in_track($code) {
		#$this->db->select('genre_detail, title_slug, record_company, composer, featured_musician, lyrics');
		$this->db->select('*');
		$this->db->from('track_info');
		$this->db->where('track_uno', "$code");
		#$this->db->where('lyrics', NULL);
		$query=$this->db->get();
		#var_dump($this->db->last_query());exit;
		return $query->result();
	}
*/

    function check_Null_in_track($t_uno)
    {
        $this->db->select('*');
		return $this->db->get_where('track_info', array('track_uno'=>$t_uno))->row();
    }	

	function get_single_track_detail_of_it($code) {
		$this->db->select('*');
		$this->db->from('track_info');
		$this->db->where('track_uno', "$code");
		$query=$this->db->get();
		return $query->result();
	}

	function get_top_track_recordings() {
		$this->db->select('*');
		$this->db->order_by('recom','desc');
		$this->db->limit(10);
		$query=$this->db->get('album_info');
		return $query->result();
	}	

	function get_all_courses() {
		$this->db->select('*');
		$this->db->order_by('rand()','desc');
		$query=$this->db->get('online_course');
		return $query->result();
	}	

	function get_four_albums_in_category($catalog_no, $title_slug, $album_kinds) {
		$this->db->select('*');
		$this->db->order_by('rand()');
		$this->db->where('catalog_no !=', $catalog_no);
		//$this->db->where('title_slug !=', $title_slug);
		$this->db->where('genre', $album_kinds);
		$this->db->limit(6);
		return $this->db->get('album_info')->result();
		//$this->db->get('album_info')->result();
		//$query = $this->db->last_query();
		//var_dump($query); exit;
	}

    function get_one_album($catalog_no){
        $this->db->select('*');
        return $this->db->get_where('album_info', array('catalog_no'=>$catalog_no))->row();
    }

	public function deleteComposer1($uno){
		$this->db->where('uno', $uno);
		return $this->db->delete('composer');
	}
	
	function get_album_track($catalog_no) {
		$this->db->select('*');
		$this->db->order_by('album_code','asc');
		$this->db->limit(10);
        return $this->db->get_where('track_info', array('album_code'=>$catalog_no))->result();
	}

	function get_track_cnt($catalog_no) {
		$this->db->select('count(track_uno) as cnt');
		return $data = $this->db->get_where('track_info', array('album_code'=>$catalog_no))->result();
	}

    function get_one_artist($uno) {
        $this->db->select('*');
        return $this->db->get_where('performer', array('uno'=>$uno))->row();
    }
/*
    function get_one_composer_at_aiceo($uno){
		$this->db->select('a.uno, a.last_name, a.first_name, a.url_slug, a.nation, a.education, a.job, a.file_name1, a.file_name2, a.content, b.birth_month, b.birth_day, b.birth_year, b.death_month, b.death_day, b.death_year, ');
		$this->db->from('composer a');
		$this->db->join('composer_birth_death_date b', 'a.uno = b.composer_uno');
		$this->db->where('a.uno', $uno);
		$query = $this->db->get();
		//$query = $this->db->last_query();exit;
		if($query->num_rows() != 0)
		{
			return $ret = $query->row();
		}
		else
		{
			return false;
		}		
    }
*/

	function get_one_composer_at_aiceo($uno) {
		$this->db->select('*');
        return $this->db->get_where('composer', array('uno'=>$uno))->row();
	}

	function one_composer_at_opus($url_key, $uno) {
		$this->db->select('a.uno, a.last_name, a.first_name, a.url_slug, a.nation, a.education, a.job, a.file_name1, a.file_name2, a.content, b.birth_year, b.death_year');
		$this->db->from('composer a');
		$this->db->join('composer_birth_death_date b', 'a.uno = b.composer_uno');
		$this->db->where('a.last_name !=', 'unknown');
		$this->db->where('url_slug', $url_key);
		$this->db->where('a.uno', $uno);
		$this->db->order_by('a.uno','ASC');
		$query = $this->db->get();
		//$this->db->get_where('performer', array('uno'=>$uno))->row();
		//$query = $this->db->last_query();exit;
		//var_dump($query);exit;
		if($query->num_rows() != 0)
		{
			return $ret = $query->row();
		}
		else
		{
			return false;
		}		
	}

    function get_one_member($uno){
        $this->db->select('*');
        return $this->db->get_where('members', array('uno'=>$uno))->row();
    }

	function get_one_course($uno) {
		$this->db->select('*');
		return $this->db->get_where('online_course', array('title_slug'=>$uno))->row();
	}

	function get_search_result($keyword) {
		$this->db->select('*');
		$this->db->order_by('rand()');
		$this->db->like('album_name', $keyword);
		$this->db->or_like('album_ko_name', $keyword);
		$this->db->or_like('record_company', $keyword);
		$this->db->or_like('artist_info', $keyword);
		$this->db->or_like('comp_info', $keyword);
		$this->db->or_like('description', $keyword);
		//$this->db->limit(12);
		return $this->db->get('album_info')->result();
		//$query = $this->db->get('album_info')->result();
		//echo $this->db->last_query();
		//exit;
	}

	function get_all_artist() {
		$this->db->select('*');
		$this->db->order_by('uno','desc');
//		$this->db->limit(50);
		$query=$this->db->get('performer');
		return $query->result();
	}

	function get_featured_performers() {
		$this->db->select('*');
		$this->db->order_by('uno','desc');
		$this->db->limit(10);
		$query=$this->db->get('performer');
		return $query->result();
	}

	function get_top_performers() {
		$this->db->select('*');
		$this->db->order_by('uno','desc');
		$this->db->limit(25);
		$query=$this->db->get('performer');
		return $query->result();
	}

/*
	function get_all_composers() {
		$this->db->select('a.uno, a.last_name, a.first_name, a.url_slug, a.nation, a.education, a.job, a.file_name1, a.file_name2, a.content, b.birth_year, b.death_year');
		$this->db->from('composer a');
		$this->db->join('composer_birth_death_date b', 'a.uno = b.composer_uno');
		$this->db->where('a.last_name !=', 'unknown');
		$this->db->order_by('a.uno','ASC');
		$query = $this->db->get(); 
		//$query = $this->db->last_query();
		//var_dump($query);exit;
		if($query->num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
*/

	function get_all_composers() {
		$this->db->select('*');
		$this->db->order_by('uno','ASC');
		$query=$this->db->get('composer');
		return $query->result();
	}

	function get_featured_composers() {
		$this->db->select('*');
		$this->db->order_by('uno','ASC');
		$this->db->limit(12);
		$query=$this->db->get('composer');
		return $query->result();
	}

	function get_top_composers() {
		$this->db->select('*');
		$this->db->order_by('uno','ASC');
		$this->db->limit(25);
		$query=$this->db->get('composer');
		return $query->result();
	}

	function get_all_members() {
		$this->db->select('*');
		$this->db->order_by('uno','desc');
		$query=$this->db->get('members');
		return $query->result();
	}


	function get_all_onlinecourses() {
		$this->db->select('*');
		$this->db->order_by('num','desc');
		$query=$this->db->get('online_course');
		return $query->result();
	}

	function get_education() {
		$this->db->select('*');
		$this->db->order_by('uno','desc');
		$query=$this->db->get('educational_status');
		return $query->result();
	}

	function get_studyarea() {
		$this->db->select('*');
		$this->db->order_by('uno','asc');
		$query=$this->db->get('major_study');
		return $query->result();
	}


	function get_max_uno()	{
		$this->db->select_max('uno');
		$query=$this->db->get('performer');
		return $query->row();
	}


	function get_max_uno_composer()	{
		$this->db->select_max('uno');
		$query=$this->db->get('composer');
		return $query->row();
	}


	function get_nation() {
		$this->db->select('*');
		$query=$this->db->get('country_code');
		return $query->result();
	}


	function get_big_category1() {
		$this->db->distinct();
		$this->db->select('level1');
		$query=$this->db->get('category1');
		return $query->result();
	}

	function get_small_category1() {
		$this->db->distinct();
		$this->db->select('level2');
		$query=$this->db->get('category1');
		return $query->result();
	}

	function get_publisher() {
		$this->db->select('*');
		$this->db->order_by('label_name','asc');
		$query=$this->db->get('recording_company');
		return $query->result();
	}


/*
    function gets(){
    	return $this->db->query("SELECT * FROM performer ORDER BY last_name ASC LIMIT 10")->result_array();
    }
*/

//	function get_featured_artist()
//	{
//		$query=$this->db->query("SELECT * FROM performer ORDER BY last_name ASC LIMIT 10");
//		$this->db->select('*');
//		$this->db->order_by('last_name','asc');
//		return $this->db->get('performer');
//		return $this->result();
//	}


	function get_featured_artist() {
		$this->db->select('*');
		$this->db->order_by('last_name','asc');
		$this->db->limit(10);
		$query=$this->db->get('performer');
		return $query->result();
	}

	function get_album_by_artist() {
		$this->db->select('*');
		$this->db->order_by('uno','asc');
		$this->db->limit(10);
		$query=$this->db->get('performer');
		return $query->result();
	}

	function get_top_artists() {
		$this->db->select('*');
		$this->db->order_by('uno','desc');
//		$this->db->limit(6);
		$query=$this->db->get('performer');
		return $query->result();
	}


    function get_course_data($num){
        $this->db->select('*');
        return $this->db->get_where('online_course', array('num'=>$num))->row();
    }


    function add($title, $description){
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('user',array(
            'title'=>$title,
            'description'=>$description
        ));        
        return $this->db->insert_id();
    }

    function insert_album_info($data)
    {
        $this->db->insert('album_info', $data);
        return $this->db->insert_id();
    }

    function delete($topic_id){
        return $this->db->delete('user', array('id'=>$topic_id));
    }


    function _head(){
        $this->_head();
        
    }

}