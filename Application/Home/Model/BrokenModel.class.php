<?php
/**
 * Created by PhpStorm.
 * User: songy
 * Date: 2019/5/28
 * Time: 19:18
 */

namespace Home\Model;


use Think\Model;

class BrokenModel extends Model
{
   public function addBroken($name,$email,$content,$time){
       $Broken = M('broken');
       $data['name'] = $name;
       $data['email'] = $email;
       $data['content'] = $content;
       $data['time'] = $time;
       $result = $Broken->add($data);
       return $result;
   }
}