<?php

namespace app\admin\validate;
use think\Validate;

class Rental extends Validate{

    protected $rule = [
        ['name', 'require', '名字不能为空'],
        ['title', 'require', '标题不能为空'],
        ['tel', 'require', '电话不能为空'],
        ['price', 'require', '价格不能为空'],
        ['type', 'require', '类型不能为空'],
        ['logo', 'require', '图片不能为空'],
        ['content', 'require', '内容不能为空'],
        ['description', 'require', '简述不能为空'],
        ['end_time', 'require', '结束时间不能为空'],
    ];
}