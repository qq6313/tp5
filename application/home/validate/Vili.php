<?php

namespace app\home\validate;
use think\Validate;

class Vili extends Validate{

    protected $rule = [
        ['realname', 'require', '真实姓名不能为空'],
        ['num', 'require', '房号不能为空'],
        ['tel', 'require', '电话不能为空'],
        ['relation', 'require', '关系不能为空'],
        ['card_id', 'require', '身份证号码不能为空'],
    ];
}