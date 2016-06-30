<?php
/**
 * Created by PhpStorm.
 * User: YHx
 * Date: 2016/6/30
 * Time: 11:35
 */

namespace Admin\Controller;

use Think\Controller;

class PublicController extends Controller{


    function login(){
        if(isset($_SESSION['ADMIN_ID'])){
            $this->redirect('Index/index');
        }
        $this->display();
    }

    function do_login(){
        if(!empty($_POST)){
            $user_name=I('get.username');
            $passwod=I('get.pwd');
            $admin=M('users');
            $condition=array(
                'user_login'=>$user_name,
                'user_pass'=>md5($passwod)
            );
            $user=$admin->where($condition)->find();

            if($user){
                session('ADMIN_ID',$user['id']);
                session('user_name',$user['user_name']);
            }

        }
        $this->redirect('Index/index');

    }


    function login_out(){
        session('ADMIN_ID',null);
        redirect('public/login');
    }


}