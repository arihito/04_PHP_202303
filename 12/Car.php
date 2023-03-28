<?php
abstract class Car
{
    protected $color;
    protected $tire;

    abstract public function run();
    abstract public function back();

    /**
     * セッターとして値を代入
     *
     * @param string $clr
     * @param integer $tir
     */
    public function __construct(string $clr, int $tir)
    {
        $this->color = $clr;
        $this->tire = $tir;
    }
}

