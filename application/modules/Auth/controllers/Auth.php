<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

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

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function index()
	{
		//
		udah_login();
		$this->load->view('login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('Auth/auth_model');
			$query = $this->auth_model->login($post);
			if($query->num_rows() > 0) {
				$row = $query->row();
				$params = array (
					'nama' => $row->name,
					'userid' => $row->user_id,
					'role' => $row->role,
				);
				$this->session->set_userdata($params);

				redirect('dashboard');
			} else {
				echo "login gagal";
			}
		}
	}


	public function logout()
	{
		$params = array ('userid', 'role');
		$this->session->sess_destroy($params);
		redirect('auth');
	}
}
