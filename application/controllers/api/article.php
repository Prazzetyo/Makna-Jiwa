<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Article extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model','article');
        // $this->methods['index_get']['limit'] = 10;
    }

    public function index_get()
    {
        $id_artikel = $this->get('id_artikel');
        if ( $id_artikel === null){
            $article = $this->article->getArticle();
        }else{
            $article = $this->article->getArticle($id_artikel);
        }
        
        
        if($article){
            $this->response([
                'status' => true,
                'data' => $article
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id_artikel not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id_artikel = $this->delete('id_artikel');

        if($id_artikel === null){
            $this->response([
                'status' => false,
                'message' => 'id_artikel is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if( $this->article->deleteArticle($id_artikel) > 0){
                $message = [
                    'status' => true,
                    'id_artikel' => $id_artikel,
                    'message' => 'Deleted the article'
                ];
        
                $this->set_response($message, REST_Controller::HTTP_OK);
            }else{
                // id not found
                $this->response([
                    'status' => false,
                    'message' => 'id_artikel not found'
                ],REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $judul = $this->post('judul_artikel');
        $deskripsi = $this->post('deskripsi');
        $gambar = $this->post('gambar');
        $penulis = $this->post('penulis');

        if($judul === null){
            $this->response([
                'status' => false,
                'message' => 'judul_artikel is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($deskripsi === null){
            $this->response([
                'status' => false,
                'message' => 'deskripsi is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($gambar === null){
            $this->response([
                'status' => false,
                'message' => 'gambar is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($penulis === null){
            $this->response([
                'status' => false,
                'message' => 'penulis is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }

        $data = [
            'judul_artikel' => $judul,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar,
            'penulis' => $penulis
        ];

        

        if($this->article->createArticle($data) > 0){
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
        $id_artikel = $this->put('id_artikel');
        $judul = $this->put('judul_artikel');
        $deskripsi = $this->put('deskripsi');
        $gambar = $this->put('gambar');
        $penulis = $this->put('penulis');

        if($id_artikel === null){
            $this->response([
                'status' => false,
                'message' => 'id_artikel is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($judul === null){
            $this->response([
                'status' => false,
                'message' => 'judul_artikel is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($deskripsi === null){
            $this->response([
                'status' => false,
                'message' => 'deskripsi is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($gambar === null){
            $this->response([
                'status' => false,
                'message' => 'gambar is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
        if($penulis === null){
            $this->response([
                'status' => false,
                'message' => 'penulis is required'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }

        $data = [
            'judul_artikel' => $judul,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar,
            'penulis' => $penulis
        ];

        if($this->article->updateArticle($data, $id_artikel) > 0){
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