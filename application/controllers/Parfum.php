<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parfum extends CI_Controller {

	
	public function index()
	{
	
		$data['wanita']= $this->M_parfum->ambil_data_wanita();
		$data['pria']= $this->M_parfum->ambil_data_pria();
		
		
		$this->load->view('template/header');
		$this->load->view('View_parfum',$data);
		$this->load->view('template/footer');
	}
	public function tambah(){
		$this->load->view('template/header');
		$this->load->view('tambah');
		$this->load->view('template/footer');
	}
	public function tambah_parfum(){
		
		$data = array(
			'id_parfum'=> $this->input->post('id_parfum'),
			'merek'=> $this->input->post('merek'),
			'gender'=>$this->input->post('gender'),
			'ukuran'=>$this->input->post('ukuran'),
			'jenis'=>$this->input->post('jenis'),
			'kekuatan_aroma'=>$this->input->post('ka'),
			'klarifikasi_aroma'=>$this->input->post('kla'),
			'tahun'=>$this->input->post('thn'),
			'harga'=>$this->input->post('hrg'),
			'stok'=>$this->input->post('stok')
		);
		$this->db->insert('t_parfum', $data);
    	redirect('parfum');

	}

	
	public function update_($id)
	{
		
		$data['parfum'] = $this->M_parfum->update($id);
		 $this->load->view('template/header');
		$this->load->view('update',$data);
		$this->load->view('template/footer');

	 }
	public function update_data()
  {

	$query = array('id_parfum' => $this->input->post('id_parfum'));
	$nama_foto = $_FILES['foto'];
if ($foto='') {}else {
	$config['upload_path']	='./assets/image';
	$config['allowed_types']	='jpeg|PNG|jpg';
	$config['max_size'] ='5120';

	$this->load->library('upload',$config);
	if (!$this->upload->do_upload('foto')) {
		echo "upload gagal"; die();
	}else {
		$foto=$this->upload->data('file_name');
	}
	$data = array(
            'id_parfum' => $this->input->post('id_parfum'),
            'merek' => $this->input->post('merek'),
            'gender' => $this->input->post('gender'),
            'ukuran' => $this->input->post('ukuran'),
            'jenis' => $this->input->post('jenis'),
            'kekuatan_aroma' => $this->input->post('ka'),
			'klarifikasi_aroma' => $this->input->post('kla'),
			'tahun' => $this->input->post('thn'),
			'harga' => $this->input->post('hrg'),
            'stok' => $this->input->post('stok'),
			'nama_foto'=>$foto	
			
			
        );
    $this->M_parfum->update_data_($data,$query);
    redirect('parfum');
}
  }
	public function profil_p()
	{
		$data['parfum']= $this->M_parfum->data();
		$this->load->view('profil',$data);

	}

	public function upload_file() {
        $name = $this->input->post('nme_foto');
        $config['upload_path']      = "./assets/image/";
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        $config['file_name']        = $name; 
          
        $this->upload->initialize($config);
        $pathgambar = realpath(APPPATH . '../assets/image');
        $this->upload->do_upload('fileToUpload');
        $file = $this->upload->data('file_name');
        $this->db->query("UPDATE `t_parfum` SET `nama_foto`='$file' WHERE `id_parfum`='$name'");
        redirect(site_url('parfum'));
    }
}