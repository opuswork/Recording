<?php
class Register_model extends CI_Model
{
    function insert($data)
    {
        $this->db->insert('members', $data);
        return $this->db->insert_id();
    }

    function insert_photo($data)
    {
        $this->db->insert('profile_photo', $data);
        return $this->db->insert_id();
    }

    function update_members($data, $user_id)
    {
        $this->db->where('op_id', $user_id);
        $this->db->update('members', $data);
        return $updatedId = $this->db->get('members')->row()->op_id;
    }

    function verify_email($key)
    {
        $this->db->where('verification_key', $key);
        $this->db->where('is_email_verified', 'no');
        $query = $this->db->get('members');
        if($query->num_rows() > 0)
        {
            $data = array(
                'is_email_verified'  => 'yes'
            );
            $this->db->where('verification_key', $key);
            $this->db->update('members', $data);
            return true;
        }
        else
        {
            return false;
        }
    }
	
	
	function insert_album_info($data) {
        $this->db->insert('album_info', $data);
        return $this->db->insert_id();

	}
	
	function insert_artist_info($data) {
        $this->db->insert('performer', $data);
        return $this->db->insert_id();

	}
	
	function insert_composer_info($data) {
        $this->db->insert('composer', $data);
        return $this->db->insert_id();

	}

    function insert_new_course($data) {
        $this->db->insert('online_course', $data);
        return $this->db->insert_id();
    }
	

    function update_album_info($data, $user_id)
    {
        $this->db->where('catalog_no', $user_id);
        $this->db->update('album_info', $data);
        return $updatedId = $this->db->get('album_info')->row()->catalog_no;
    }

    /**
     * working on the project...
     */
    function update_Track_info($data, $t_uno, $al_code)
    {
        $this->db->where('track_uno', $t_uno);
        $this->db->where('album_code', $al_code);
        $this->db->update('track_info', $data);
        $query = $this->db->get('track_info')->row()->track_uno;
        #var_dump($this->db->last_query());exit;
    }

    function update_online_course($data, $user_id)
    {
        $this->db->where('num', $user_id);
        $this->db->update('online_course', $data);
        return $updatedId = $this->db->get('online_course')->row()->num;
    }

    function update_artist_info($data, $user_id)
    {
        $this->db->where('performer_no', $user_id);
        $this->db->update('performer', $data);
        return $updatedId = $this->db->get('performer')->row()->performer_no;
    }	

    function update_composer_info($data, $user_id)
    {
        $this->db->where('uno', $user_id);
        $this->db->update('composer', $data);
        return $updatedId = $this->db->get('composer')->row()->uno;
        //$this->db->get('composer')->row()->com_no;
        //$query = $this->db->last_query();

    }	

    function update_member_info($data, $user_id)
    {
        $this->db->where('uno', $user_id);
        $this->db->update('members', $data);
        return $updatedId = $this->db->get('members')->row()->uno;
    }	


    function update_course_info($data, $user_id)
    {
        $this->db->where('num', $user_id);
        $this->db->update('online_course', $data);
        return $updatedId = $this->db->get('online_course')->row()->num;
    }   


}

?>