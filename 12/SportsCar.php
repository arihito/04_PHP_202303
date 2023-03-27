<?php declare(strict_types=1);
require_once dirname(__FILE__) . '/Car.php';
require_once dirname(__FILE__) . '/Status.php';


class SportsCar extends Car implements Status
{
    private $bland = 'ポルシェ';
    private $speed;

    /**
     * 加速スピードを設定
     *
     * @param integer $sp
     * @return void
     */
    public function accel(int $sp): void
    {
        $this->speed = $sp;
    }

    /**
     * 走り出す
     *
     * @return string
     */
    public function run(): string
    {
        return 'ウィーン';
    }

    /**
     * バックする
     *
     * @return string
     */
    public function back(): string
    {
        return 'ピーピー';
    }

    /**
     * プロパティの一覧を返す
     *
     * @return void
     */
    public function getList(): void
    {
        echo '<ul>';
        echo '<li>ブランド：' . $this->bland . '</li>';
        echo '<li>スピード：' . $this->speed . 'km</li>';
        echo '<li>カラー：' . $this->color . '色</li>';
        echo '<li>タイヤ：' . $this->tire . '個</li>';
        echo '</ul>';
    }
}
