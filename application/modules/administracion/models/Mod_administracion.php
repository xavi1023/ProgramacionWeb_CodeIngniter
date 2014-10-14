<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mod_administracion extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_usuarios()
	{
		$query = $this->db->get('users');
		if ($query->num_rows() > 0){ return $query->row(); }
		else { return FALSE; }
	}

	
}

/* End of file users.php */
/* Location: ./application/models/auth/users.php */