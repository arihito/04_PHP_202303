<?php
interface Figure
{
    public function __construct(string $n, int $d);
    public function getArea();
    public function getSurroundings();
}

class Rect implements Figure
{
    private $name = '図形';
    private $diameter;

    /**
     * 直径を設定
     *
     * @param string $n
     * @param integer $d
     */
    public function __construct(string $n, int $d)
    {
        $this->name     = $n;
        $this->diameter = $d;
    }

    /**
     * 面積を返す
     *
     * @return string
     */
    public function getArea(): string
    {
        return $this->name . 'の面積は' . $this->diameter ** 2 . 'です。<br>';
    }

    /**
     * 周囲長を返す
     *
     * @return string
     */
    public function getSurroundings(): string
    {
        return $this->name . 'の周囲長は' . $this->diameter * 4 . 'です。<br>';
    }
}

class Circle implements Figure
{
    private $name = '図形';
    private $diameter;

    /**
     * 直径を設定
     *
     * @param string $n
     * @param integer $d
     */
    public function __construct(string $n, int $d)
    {
        $this->name     = $n;
        $this->diameter = $d;
    }

    /**
     * 面積を返す
     *
     * @return string
     */
    public function getArea(): string
    {
        return $this->name . 'の面積は' . round($this->diameter ** 2 * pi(), 2) . 'です。<br>';
    }

    /**
     * 周囲長を返す
     *
     * @return string
     */
    public function getSurroundings(): string
    {
        return $this->name . 'の周囲長は' . round($this->diameter * pi(), 2) . 'です。<br>';
    }
}

$r = new Rect('正方形', 10);
echo $r->getArea();
echo $r->getSurroundings();

$c = new Circle('円', 10);
echo $c->getArea();
echo $c->getSurroundings();
