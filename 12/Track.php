<?php declare(strict_types=1);
require_once dirname(__FILE__) . '/Car.php';
require_once dirname(__FILE__) . '/Status.php';

class Track extends Car implements Status
{
    private $power = 400;
    private $wight;

    /**
     * 積載量を設定
     *
     * @param integer $t
     * @return void
     */
    public function lift(int $t): void
    {
        $this->wight = $t;
    }

    /**
     * 走り出す
     *
     * @return string
     */
    public function run(): string
    {
        return 'ウォンウォン';
    }

    /**
     * バックする
     *
     * @return string
     */
    public function back(): string
    {
        return 'ご注意くださいバックします';
    }

        /**
     * プロパティの一覧を返す
     *
     * @return void
     */
    public function getList(): void
    {
        echo '<ul>';
        echo '<li>馬力：' . $this->power . 'kW</li>';
        echo '<li>容量：' . $this->wight . 'トン</li>';
        echo '<li>カラー：' . $this->color . '色</li>';
        echo '<li>タイヤ：' . $this->tire . '個</li>';
        echo '</ul>';
    }
}

