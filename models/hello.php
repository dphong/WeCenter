<?php
class hello_class extends AWS_MODEL
{
    public function data()
    {
        $list = array(array('name'=>'张三','id'=>1),array('name'=>'李四','id'=>2));

        return $list;
    }
}
?>