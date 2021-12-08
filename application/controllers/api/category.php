<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Category extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model','category');
        // $this->methods['index_get']['limit'] = 10;
    }

    public function index_get()
    {
        $id_kategori = $this->get('id_kategori');
        if ( $id_kategori === null){
            $category = $this->category->getCategory();
        }else{
            $category = $this->category->getCategory($id_kategori);
        }
        
        
        if($category){
            $this->response([
                'status' => true,
                'data' => $category
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
        $id_kategori = $this->delete('id_kategori');

        if($id_kategori === null){
            $this->response([
                'status' => false,
                'message' => 'id_kategori is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if( $this->category->deleteCategory($id_kategori) > 0){
                // ok
                /* $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'record deleted'
                ],REST_Controller::HTTP_OK);
                */
                $message = [
                    'status' => true,
                    'id_kategori' => $id_kategori,
                    'message' => 'Deleted the category'
                ];
        
                $this->set_response($message, REST_Controller::HTTP_OK);
            }else{
                // id not found
                $this->response([
                    'status' => false,
                    'message' => 'id_kategori not found'
                ],REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $nama = $this->post('nama');
        $deskripsi = $this->post('deskripsi');

        if($nama === null){
            $this->response([
                'status' => false,
                'message' => 'nama is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($deskripsi === null){
            $this->response([
                'status' => false,
                'message' => 'deskripsi is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }

        $data = [
            'nama' => $nama,
            'deskripsi' => $deskripsi
        ];

        

        if($this->category->createCategory($data) > 0){
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
        $id_kategori = $this->put('id_kategori');
        $nama = $this->put('nama');
        $deskripsi = $this->put('deskripsi');

        if($id_kategori === null){
            $this->response([
                'status' => false,
                'message' => 'id_kategori is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($nama === null){
            $this->response([
                'status' => false,
                'message' => 'nama is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($deskripsi === null){
            $this->response([
                'status' => false,
                'message' => 'deskripsi is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }

        $data = [
            'nama' => $nama,
            'deskripsi' => $deskripsi
        ];

        if($this->category->updateCategory($data, $id_kategori) > 0){
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