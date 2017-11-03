<?php
/**
 * Created by PhpStorm.
 * User: Whark
 * Date: 2017/10/30
 * Time: 17:13
 */

if (!defined('IN_ANWSION'))
{
    die;
}
class main extends AWS_CONTROLLER
{
    public function get_access_rule()
    {
        $rule_action['rule_type'] = 'white';

        if ($this->user_info['permission']['visit_question'] AND $this->user_info['permission']['visit_site'])
        {
            $rule_action['actions'][] = 'index';
        }

        return $rule_action;
    }
    public function index_action()
    {
        $list = $this->model('hello')->data();
        TPL::assign('hello', 'hello world!');
        TPL::assign('list', $list);
        TPL::output('hello/index');
    }
}