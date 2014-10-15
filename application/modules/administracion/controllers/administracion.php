<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administracion extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url'); // cargar variables globales de URL
		$this->load->library('tank_auth'); // libreria de autenticacion
		$this->load->model('Mod_administracion');
	}

	function index()
	{
			echo "Hola Mundo ya con cambios en github";
		
	}
	function usuarios()
	{		//comprueba si esta iniciada una sesion, si= continua hacia la plantilla, no= mensaje de error
			if (!$this->tank_auth->is_logged_in()) { echo "No tiene permiso de acceder a esta seccion."; } else {
			// guardo en el arreglo $data las variables de id de usuario y nombre de usuario
			$data['id_usuario']	= $this->tank_auth->get_user_id();
			$data['nombre_usuario']	= $this->tank_auth->get_username();
			$data['tabla_usuarios'] = $this->Mod_administracion->get_usuarios();

			// renderizo la vista index.php (modules/administracion/views/index.php)
			$this->load->view('index', $data);
			}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */