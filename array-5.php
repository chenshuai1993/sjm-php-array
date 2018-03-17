<?php
/**
 * Created by PhpStorm.
 * User: chenshuai
 * Date: 2018/3/17
 * Time: 下午3:51
 */


class arrayObj implements ArrayAccess
{

    private $container = array();


    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
        return isset($this->container[$offset]) ? '存在' : '不存在';
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
        /*if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }*/

        $this->container[$offset] = $value;

    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
        return isset($this->container[$offset]) ? $this->container[$offset] :null;
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
        unset($this->container[$offset]);
    }
}

#示例
$arrayObj = new arrayObj();

$arrayObj['name'] = 'chenshuai';
$arrayObj['age'] = '26';

echo '名字是',$arrayObj['name'],';','年龄是',$arrayObj['age'];


