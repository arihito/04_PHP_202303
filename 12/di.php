<?php
$t = 30;
$h = 72;

class Di
{
    private $t;   // 気温 T
    private $h;  // 湿度 H
    private $di;  // 不快指数

    /**
     * 初期値の追加
     *
     * @param mixed $t
     * @param mixed $h
     */
    public function __construct(mixed $t = null, mixed $h = 0)
    {
        $this->t = $t;
        $this->h = $h;
        $this->di = 0.81 * $this->t + 0.01 * $this->h * (0.99 * $this->t - 14.3) + 46.3;
    }

    /**
     * 不快指数の数値を返す
     *
     * @return float
     */
    public function getDiScore(): float
    {
        return $this->di;
    }

    /**
     * 不快指数の体感を返す
     *
     * @return string
     */
    public function getDiResult(): string
    {
        if ($this->di < 55) {
            return '寒い';
        } elseif ($this->di < 60) {
            return '肌寒い';
        } elseif ($this->di < 65) {
            return '何も感じない';
        } elseif ($this->di < 70) {
            return '快い';
        } elseif ($this->di < 75) {
            return '暑くない';
        } elseif ($this->di < 80) {
            return 'やや暑い';
        } elseif ($this->di < 85) {
            return '暑くて汗が出る';
        } else {
            return '暑くてたまらない';
        }
    }
}
?>
気温<?= $t ?>℃、湿度<?= $h ?>%の時の不快指数は<?= (new Di($t, $h))->getDiScore() ?>で「<?= (new Di($t, $h))->getDiResult() ?>」です。
