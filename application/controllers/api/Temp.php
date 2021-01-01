<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Kepegawaian extends REST_Controller {

    function __construct($config = 'rest') {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
        parent::__construct($config);
        if ( "OPTIONS" === $_SERVER['REQUEST_METHOD'] ) {
            die();
        }
        $this->load->database();
    }

    function index_get() {
        $res=[];
        $this->response($res, 200);
    }

    function index_post() {
        $res=[];
        $this->response($res, 200);
    }

    function index_put() {
        $res=[];
        $this->response($res, 200);
    }

    function index_delete() {
        $res=[];
        $this->response($res, 200);
    }
}
?>