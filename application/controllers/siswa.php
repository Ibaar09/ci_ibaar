<?php
    class Siswa extends CI_Controller{
        function index(){
        }

        
            public function tampil_siswa(){
            
                $this->load->model('M_siswa');
                $data['siswa'] = $this->M_siswa->tampil_siswa()->result();
                $this->load->view('V_tampil_siswa',$data);
            
              }    
        }