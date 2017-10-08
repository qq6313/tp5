<?php
namespace app\home\controller;
class Fuwu extends Home{
    public function index(){
       return $this->fetch();
    }
}