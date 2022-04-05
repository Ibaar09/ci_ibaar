<?php
    class Kelas extends CI_Controller{
      function biodata($nama,$alamat,$no_hp,$email,$sekolah,$idola){

        $data = [
                   'nm'      => $nama,
                   'almt'    => $alamat,
                   'no_hp'   => $no_hp,
                   'email'   => $email,
                   'skl'     => $sekolah,
                   'idl'     => $idola,



                ];
          $this->load->view('v_murid_kelas', $data);
      } 

      function tambah_data(){
          $this->load->view('form_tambah_data');
      }
      function action_tambah_data(){

        $data['nm']     = $this->input->post('nama');
        $data['almt']   = $this->input->post('alamat');
        $data['no_hp']  = $this->input->post('no_hp');
        $data['email']  = $this->input->post('email');
        $data['skl']    = $this->input->post('sekolah');
        $data['idl']    = $this->input->post('idola');

         $this->load->view('v_murid_kelas', $data);
      
      }
      public function tampil_data(){
        $this->load->model('M_profile');
        $data['kelas'] = $this->M_profile->tampil_data()->result();
        $this->load->view('V_tampil_data_profile',$data);
      }
      public function tampil_data_siswa(){
        $this->load->model('M_siswa');
        $data['kelas'] = $this->M_siswa->tampil_data()->result();
        $this->load->view('V_tampil_siswa',$data);
      }
      public function tambah_data_profile(){
        $this->load->view('form_tambah_data_profile');
      }
      function action_tambah_data_profile(){
        $add =[
          'nama_depan'              =>$this->input->post('nama_depan'),
          'nama_belakang'           =>$this->input->post('nama_belakang'),
          'tempat_lahir'            =>$this->input->post('tempat_lahir'),
          'tanggal_lahir'           =>$this->input->post('tanggal_lahir'),
          'jenis_kelamin'           =>$this->input->post('jenis_kelamin'),
          'alamat'                  =>$this->input->post('alamat'),
          'jenjang_pendidikan'      =>$this->input->post('jenjang_pendidikan'),
         

        ];
        $this->db->insert('tabel_profile',$add);
        redirect('../kelas/tampil_data');
      }
      function update_data($id_siswa){
        $this->load->model('M_profile');
        $data['kelas']=$this->M_profile->get_data_by_id($id_siswa)->row_array();
        $this->load->view('update_data_profile', $data);
      }
      function action_update_data_profile(){
        $id_siswa=$this->input->post('id_siswa');
        $update =[
          'nama_depan'              =>$this->input->post('nama_depan'),
          'nama_belakang'           =>$this->input->post('nama_belakang'),
          'tempat_lahir'            =>$this->input->post('tempat_lahir'),
          'tanggal_lahir'           =>$this->input->post('tanggal_lahir'),
          'jenis_kelamin'           =>$this->input->post('jenis_kelamin'),
          'alamat'                  =>$this->input->post('alamat'),
          'jenjang_pendidikan'      =>$this->input->post('jenjang_pendidikan'),

        ];
        $update =$this->db->update('tabel_profile',$update,['id_siswa'=>$id_siswa]);
        redirect('../kelas/tampil_data');
      }
      function hapus_data($id_siswa){
        $id_siswa = $id_siswa;
        $this->db->delete('tabel_profile', ['id_siswa' => $id_siswa]);
        redirect('../kelas/tampil_data');
    }
     
}
?>