<?php defined('BASEPATH') or exit('No direct script access allowed');

class Nasabah extends MY_Controller
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
        $this->load->model('nasabah_model');
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
        $judul['page_title'] = 'Data Nasabah';
        $this->load->view('nasabah_data', $judul);
    }

    // public function datatable_data()
    // {
    //     $data = $this->nasabah_model->get_datatable_data();
    //     $this->ajax->send($data);
    // }

    public function ajax_list()
    {
        $list = $this->nasabah_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $nasabah) {
            $no++;
            $row = array();
            $row[] = $nasabah->nama;
            $row[] = $nasabah->rekening;
            $row[] = $nasabah->alamat;
            $row[] = $nasabah->telp;
            $row[] = $nasabah->saldo;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="edit_person(' . "'" . $nasabah->id_nasabah . "'" . ')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_person(' . "'" . $nasabah->id_nasabah . "'" . ')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->nasabah_model->count_all(),
            "recordsFiltered" => $this->nasabah_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    public function ajax_add()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'rekening' => $this->input->post('rekening'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
            'saldo' => $this->input->post('saldo'),
        );
        $insert = $this->nasabah_model->save($data);
        echo json_encode(array("status" => TRUE));
    }
    function ajax_delete($id)
    {
        $this->nasabah_model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_edit($id)
    {
        $data = $this->nasabah_model->get_by_id($id);
        echo json_encode($data);
    }
    public function ajax_update()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'rekening' => $this->input->post('rekening'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
            'saldo' => $this->input->post('saldo'),
        );
        $this->nasabah_model->update(array('id_nasabah' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }
}
