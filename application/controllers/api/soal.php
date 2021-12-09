<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Soal extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Soal_model','soal');
        // $this->methods['index_get']['limit'] = 10;
    }

    public function index_get()
    {
        $id_kategori = $this->get('id_kategori');
        if ( $id_kategori === null){
            $soal = $this->soal->getSoal();
        }else{
            $soal = $this->soal->getSoal($id_kategori);
        }
        
        
        if($soal){
            $this->response([
                'status' => true,
                'data' => $soal
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id_kategori not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');

        if($id === null){
            $this->response([
                'status' => false,
                'message' => 'id is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if( $this->soal->deleteSoal($id) > 0){
                // ok
                /* $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'record deleted'
                ],REST_Controller::HTTP_OK);
                */
                $message = [
                    'status' => true,
                    'id_kategori' => $id,
                    'message' => 'Deleted the soal'
                ];
        
                $this->set_response($message, REST_Controller::HTTP_OK);
            }else{
                // id not found
                $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ],REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $id_kategori = $this->post('id_kategori');
        $no_soal = $this->post('no_soal');
        $soal = $this->post('soal');
        $template_jawaban = $this->post('template_jawaban');
        $opsi_a = "";
        $opsi_b = "";
        $opsi_c = "";
        $opsi_d = "";
        $opsi_e = "";


        if($id_kategori === null){
            $this->response([
                'status' => false,
                'message' => 'id_kategori is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($no_soal === null){
            $this->response([
                'status' => false,
                'message' => 'no_soal is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($soal === null){
            $this->response([
                'status' => false,
                'message' => 'soal is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }

        if ($template_jawaban === null) {
            $this->response([
                'status' => false,
                'message' => 'template_jawaban is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if ($template_jawaban === "1") {
            $opsi_a = "Sangat tidak setuju";
            $opsi_b = "Tidak setuju";
            $opsi_c = "Agak setuju";
            $opsi_d = "Sangat setuju";
            $opsi_e = "";
        }
        if ($template_jawaban === "2") {
            $opsi_a = "Tidak pernah";
            $opsi_b = "Pernah";
            $opsi_c = "Kadang-kadang";
            $opsi_d = "Sering";
            $opsi_e = "Sangat sering";
        }
        

        $data = [
            'id_kategori' => $id_kategori,
            'no_soal' => $no_soal,
            'soal' => $soal,
            'opsi_a' => $opsi_a,
            'opsi_b' => $opsi_b,
            'opsi_c' => $opsi_c,
            'opsi_d' => $opsi_d,
            'opsi_e' => $opsi_e
        ];

        

        if($this->soal->createSoal($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'record created'
            ],REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'insert record failed'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id = $this->put('id');
        $id_kategori = $this->put('id_kategori');
        $no_soal = $this->put('no_soal');
        $soal = $this->put('soal');

        if($id === null){
            $this->response([
                'status' => false,
                'message' => 'id is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($id_kategori === null){
            $this->response([
                'status' => false,
                'message' => 'id_kategori is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($no_soal === null){
            $this->response([
                'status' => false,
                'message' => 'no_soal is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($soal === null){
            $this->response([
                'status' => false,
                'message' => 'soal is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }

        $data = [
            'id_kategori' => $id_kategori,
            'no_soal' => $no_soal,
            'soal' => $soal
        ];

        if($this->soal->updateSoal($data, $id) > 0){
            $this->response([
                'status' => true,
                'message' => 'record updated'
            ],REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'update record failed'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}


?>