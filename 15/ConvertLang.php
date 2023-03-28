<?php

class ConvertLang
{
    private $totalLang;

    /**
     * セッターとして配列を初期化
     *
     * @param array $totalLang
     */
    public function __construct(array $totalLang)
    {
        $this->totalLang = $totalLang;
    }

    /**
     * 2文字の言語記号(ja)によって各国の挨拶に変換
     *
     * @param string|null $lang
     * @return string|null
     */
    public function getConvertLang(?string $lang): ?string
    {
        if (empty($lang)) return null;

        for ($i = 0; $i < count($this->totalLang); $i++) {
            if ($lang == $this->totalLang[$i]['nation']) {
                return $this->totalLang[$i]['greeting'];
            }
        }
    }
}
