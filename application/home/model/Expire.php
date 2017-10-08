<?php
namespace app\home\model;
use think\Model;

class Expire extends Model{
    protected $insert = ['status' => 1];
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';
}