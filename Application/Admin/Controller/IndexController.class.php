<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {

    public function index(){

        if(!isset($_SESSION['user_name'])){
            $this->redirect('public/login');
        }
        $this->display();
    }


}