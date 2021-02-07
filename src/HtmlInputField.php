<?php

namespace NickKingston\LaravelFormHelper;

use NickKingston\LaravelFormHelper\configs\InputConfig;

class HtmlInputField
{
    /** @var InputConfig */
    protected $config;

    /**
     * HtmlInputField constructor.
     * @param InputConfig|null $config
     */
    public function __construct(?InputConfig $config)
    {
        $this->config = $config;
    }

    /**
     * @param InputConfig $config
     * @return $this
     */
    public function create(InputConfig $config)
    {
        return new static($config);
    }

    public function toHtml()
    {
        return view('./views/input', ['variable' => '5555']);
    }

    protected function applyDataParams()
    {

    }

    protected function applyClass()
    {

    }


}
