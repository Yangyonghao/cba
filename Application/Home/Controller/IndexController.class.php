<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
//        dump($_GET['menu']);
        $this->display();
    }
}