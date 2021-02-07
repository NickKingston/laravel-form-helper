<?php

namespace NickKingston\LaravelFormHelper\configs;

use Illuminate\Database\Eloquent\Model;
use NickKingston\LaravelFormHelper\drivers\Bootstrap;

class InputConfig
{
    public static $defaultDriver = Bootstrap::class;

    /** @var string */
    protected $name;
    /** @var string */
    protected $value;
    /** @var string */
    protected $classes;
    /** @var string  */
    protected $id;
    /** @var array */
    protected $params;

    /**
     * InputConfig constructor.
     * @param string $name
     * @param string $value
     * @param array $classes
     * @param string $id
     * @param array $params
     */
    public function __construct(string $name, string $value, array $classes = [], string $id = '', array $params = [])
    {
        $this->name = $name;
        $this->value = $value;
        $this->classes = $classes;
        $this->id = $id;
        $this->params = $params;
    }

    /**
     * @param Model $model
     * @param string $field
     * @return static
     */
    public static function buildFromModel(Model $model, string $field): self
    {
        return new static($field, $model->$field);
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->$name = $value;
    }


}
