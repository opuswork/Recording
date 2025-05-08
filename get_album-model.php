<?php


    public function get_albums($limit, $offset) {
/*
        $this->db->limit($limit, $offset);
        $query = $this->db->get('album_info'); // Replace 'albums' with your table name

        return $query->result_array(); // Return as an associative array
*/
		$query = $this->db->limit($limit, $offset)->get('album_info');
		return $query->result();


    }


?>