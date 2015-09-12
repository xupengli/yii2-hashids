<?php
namespace yii2\object;

use yii\base\Object;

class Transfer extends Object
{
    /**
     * object name
     * @var string
     */
    public $objectClass = "";

    /**
     * objectClass constructor params
     * @var array
     */
    public $initArgs = [];

    /**
     * objectClass property
     * @var array
     */
    public $objectProperty = [];

    /**
     * objectClass instance
     * @var null
     */
    private $instance = null;

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after the object is initialized with the
     * given configuration.
     */
    public function init()
    {
        // TODO: Change the autogenerated stub
        $this->setInstance();

        return parent::init();
    }

    /**
     * 设置实例
     */
    private function setInstance() {
        $this->instance = (new \ReflectionClass($this->objectClass))->newInstanceArgs($this->initArgs);

        foreach ($this->objectProperty as $property => $value) {
            if (property_exists($this->instance, $value)) {
                $this->instance->{$property} = $value;
            }
        }
    }

    /**
     * Calls the named method which is not a class method.
     *
     * Do not call this method directly as it is a PHP magic method that
     * will be implicitly called when an unknown method is being invoked.
     * @param string $method the method name
     * @param array $params method parameters
     * @throws UnknownMethodException when calling unknown method
     * @return mixed the method return value
     */
    public function __call($method, $params)
    {
        // TODO: Change the autogenerated stub
        if (method_exists($this->instance, $method)) {
            return call_user_func_array([$this->instance, $method], $params);
        }
        parent::__call($method, $params);
    }

    /**
     * Returns the value of an object property.
     *
     * Do not call this method directly as it is a PHP magic method that
     * will be implicitly called when executing `$value = $object->property;`.
     * @param string $name the property name
     * @return mixed the property value
     * @throws UnknownPropertyException if the property is not defined
     * @throws InvalidCallException if the property is write-only
     * @see __set()
     */
    public function __get($name)
    {
        if (property_exists($this->instance, $name)) {
            return $this->instance->{$name};
        }
        return parent::__get($name); // TODO: Change the autogenerated stub
    }


}
