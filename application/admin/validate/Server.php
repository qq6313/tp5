<?php

namespace app\admin\validate;
use think\Validate;

class Server extends Validate{

    protected $rule = [

        ['author', 'require', '作者不能为空'],
        ['title', 'require', '标题不能为空'],
        ['content', 'require', '内容不能为空'],
        ['start_time', 'require', '开始时间不能为空'],
        ['end_time', 'require', '结束时间不能为空'],
    ];
}