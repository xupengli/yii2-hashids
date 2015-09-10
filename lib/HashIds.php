<?php
namespace yii2\hashids;

use yii\base\Object;

class Hashids extends Object
{
    /**
     * @var string
     */
    public $hashClass = '\Hashids\Hashids';

    /**
     * @var array
     */
    public $hashProperty = [];

    private $_instance = null;

    public function init()
    {
        $this->_instance = (new \ReflectionClass($this->hashClass))->newInstanceArgs($this->hashProperty);

        return parent::init();
    }

    /**
     * @param string $method
     * @param array $params
     * @return mixed
     */
    public function __call($method, $params) {
        if (method_exists($this->_instance, $method)) {
            call_user_func_array([$this->_instance, $method], $params);
        }
        return parent::__call($method, $params);
    }
}