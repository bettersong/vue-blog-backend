<?php
/**
 * Created by PhpStorm.
 * User: songy
 * Date: 2019/5/27
 * Time: 19:06
 */
namespace Home\Model;

class AdminModel extends \Think\Model
{
    public function queryLogin($username,$password){
        $Admin = M('admin');
        $result = $Admin->where("user='$username' AND password = '$password'")->find();
        return $result;
    }
}