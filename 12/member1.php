<?php

class Member
{
    public $name;
    public $age;
    public $address;

    /**
     * メンバーの名前を受け、すぐに表示
     *
     * @param string $name
     */
    public function __construct(string $name = '名無し')
    {
        $this->name = $name;
        echo '<p>' . $this->name . 'が生成されました</p>';
    }

    public function __destruct()
    {
        echo '<p>' . $this->name . 'が破棄されます</p>';
    }

    public function __call($name, $args)
    {
        echo $name . '関数、または' . implode('や', $args) .
            'となる引数は存在しません。';
    }

    public function showInfo()
    {
        echo __CLASS__ . '<br>';
        echo '<ul>';
        echo '<li>名前：' . $this->name . '</li>';
        echo '<li>年齢：' . $this->age . '</li>';
        echo '<li>住所：' . $this->address . '</li>';
        echo '</ul>';
    }
}

$m1 = new Member('山田太郎');
$m1->age     = 21;
$m1->address = '東京都';
$m1->info('test', 10, 40, 50, 60);

$m2 = new Member;
$m2->age     = 34;
$m2->address = '大阪府';

$m1->showInfo();
$m2->showInfo();
