<?php
class Files_model extends CI_Model {
 
    public function insert_file($filename, $title)
    {
        $data = array(
            'filename'      => $filename,
            'title'         => $title
        );
        $this->db->insert('files', $data);
        return $this->db->insert_id();
    }


	public function get_files()
	{
		return $this->db->select()
				->from('files')
				->get()
				->result();
	}


    public function update($data, $user_id)
    {
        $data = array(
            'filename'      => $data
        );
        $this->db->where('op_id', $user_id);
        $this->db->update('members', $data);
        return $updatedId = $this->db->get('members')->row()->op_id;
    }


 
}

?>