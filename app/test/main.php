<?php
/**
 * Created by PhpStorm.
 * User: Whark
 * Date: 2017/11/14
 * Time: 10:33
 */

if (!defined('IN_ANWSION'))
{
    die;
}

class main extends AWS_CONTROLLER
{
    public function get_access_rule()
    {
        $rule_action['rule_type'] = 'black';
        $rule_action['actions'] = array(
        );

        return $rule_action;
    }

    public function check_name_action()
    {
        $real_name = "183261436621";
        echo preg_match("/1[3,4,5,7,8]\d{9}/", $real_name);
    }

    public function judge_digits_action()
    {
        echo is_digits("1553151351346");
    }

    public function check_real_name_action()
    {
        echo $this->model("account")->check_real_name("张三你好啊");
        //echo preg_match("/[\u4e00-\u9fa5]*/" , "张三");
    }
}