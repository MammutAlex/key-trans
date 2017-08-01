<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 01.08.17
 * Time: 9:24
 */

namespace App;


class Lang
{
    /**
     * @param string $lang
     * @return array
     */
    public static function get(string $lang): array
    {
        return static::$$lang;
    }

    public static $list = ['ru', 'en', 'uk','it'];

    private static $ru = [
        "й",
        "ц",
        "у",
        "к",
        "е",
        "н",
        "г",
        "ш",
        "щ",
        "з",
        "х",
        "ъ",
        "ф",
        "ы",
        "в",
        "а",
        "п",
        "р",
        "о",
        "л",
        "д",
        "ж",
        "э",
        "я",
        "ч",
        "с",
        "м",
        "и",
        "т",
        "ь",
        "б",
        "ю"
    ];
    private static $it = [
        "q",
        "w",
        "e",
        "r",
        "t",
        "y",
        "u",
        "i",
        "o",
        "p",
        "è",
        "+",
        "a",
        "s",
        "d",
        "f",
        "g",
        "h",
        "j",
        "k",
        "l",
        "ò",
        "à",
        "z",
        "x",
        "c",
        "v",
        "b",
        "n",
        "m",
        ",",
        "."
    ];
    private static $uk = [
        "й",
        "ц",
        "у",
        "к",
        "е",
        "н",
        "г",
        "ш",
        "щ",
        "з",
        "х",
        "ї",
        "ф",
        "і",
        "в",
        "а",
        "п",
        "р",
        "о",
        "л",
        "д",
        "ж",
        "є",
        "я",
        "ч",
        "с",
        "м",
        "и",
        "т",
        "ь",
        "б",
        "ю"
    ];
    private static $en = [
        "q",
        "w",
        "e",
        "r",
        "t",
        "y",
        "u",
        "i",
        "o",
        "p",
        "[",
        "]",
        "a",
        "s",
        "d",
        "f",
        "g",
        "h",
        "j",
        "k",
        "l",
        ";",
        "'",
        "z",
        "x",
        "c",
        "v",
        "b",
        "n",
        "m",
        ",",
        "."
    ];
}