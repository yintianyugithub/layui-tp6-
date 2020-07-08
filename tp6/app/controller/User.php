<?php
/**
 * 前台用戶
 * Created by PhpStorm.
 * User: nichousha
 * Date: 2020/7/7
 * Time: 10:36
 * Todo:
 */

namespace app\controller;

use app\BaseController;
use think\facade\View;


class User extends BaseController{

    /**
     * @return string
     * User: itianyu
     * Date: 2020/7/7 18:01
     */
    public function login(){
        return View::fetch('login');
    }

    /**
     * @return \think\response\View
     * User: itianyu
     * Date: 2020/7/7 18:01
     */
    public function register(){
        return \view('register',[
            'register' => 'register'
        ]);
    }
}