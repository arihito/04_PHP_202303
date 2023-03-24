<?php
$prices = [298, 129, 198, 274, 625, 273, 296, 325, 200, 127, 398];
// 3,457円

/**
 * 購入商品価格の配列を指定すると、
 * 10%の税込み価格を返す
 *
 * @param array|null $prices
 * @param integer|null $tax
 * @return mixed
 */
function getPriceInTax(?array $prices, ?int $tax = 8): mixed
{
    if (empty($array) || empty($tax)) return null;
    $total = 0;
    foreach ($prices as $price) {
        $total += $price;
    }
    return floor($total * (1 + $tax / 100));
}


echo number_format(getPriceInTax($prices, 10)) . '円';
