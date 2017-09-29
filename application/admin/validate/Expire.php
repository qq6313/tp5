<?php

namespace app\admin\validate;
use think\Validate;

class Expire extends Validate{

    protected $rule = [
        ['content', 'require', '问题内容不能为空'],
        ['des', 'require', '问题简述不能为空'],
        ['tel', 'require', '电话不能为空'],
        ['address', 'require', '地址不能为空'],
    ];
}