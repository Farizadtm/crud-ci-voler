<?php defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{

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
        belum_login();
        $this->load->model('auth/auth_model');
        if ($this->fungsi->user_login()->role != 1) {
            redirect('dashboard');
        }
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
        $judul['page_title'] = 'User Management';

        $data['row'] = $this->auth_model->get();
        $join = $judul + $data;
        $this->load->view('user_data', $join);
    }

    public function add()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('telp', 'No Telp', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silakan isi');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '%s tidak tersedia');



        $judul['page_title'] = 'Tambah User';


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user_add', $judul);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->load->auth_model->add($post);
            redirect('user');
        }
    }


    public function edit($id)
    {
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('telp', 'No Telp', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silakan isi');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '%s tidak tersedia');



        $judul['page_title'] = 'Edit User';


        if ($this->form_validation->run() == FALSE) {
            $query = $this->auth_model->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->load->view('user_edit', $data);
            } else {
            }
        } else {
            $post~ = $this->input->post(null, TRUE);
            $this->load->auth_model->edit($post);
            redirect('user');
        }
    }

    public function delete()
    {
        $id = $this->input->post('user_id');
        $this->auth_model->delete($id);
        redirect('user');
    }
}
