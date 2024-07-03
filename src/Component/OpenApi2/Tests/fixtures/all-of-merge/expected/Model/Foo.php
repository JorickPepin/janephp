<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class Foo
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $bar;
    /**
     * A description
     *
     * @var string
     */
    protected $foo;
    /**
     * 
     *
     * @return string
     */
    public function getBar(): string
    {
        return $this->bar;
    }
    /**
     * 
     *
     * @param string $bar
     *
     * @return self
     */
    public function setBar(string $bar): self
    {
        $this->initialized['bar'] = true;
        $this->bar = $bar;
        return $this;
    }
    /**
     * A description
     *
     * @return string
     */
    public function getFoo(): string
    {
        return $this->foo;
    }
    /**
     * A description
     *
     * @param string $foo
     *
     * @return self
     */
    public function setFoo(string $foo): self
    {
        $this->initialized['foo'] = true;
        $this->foo = $foo;
        return $this;
    }
}