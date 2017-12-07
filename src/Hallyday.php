<?php
/**
 * Created by PhpStorm.
 * User: wilder15
 * Date: 07/12/17
 * Time: 10:05
 */

namespace Wcs;


class Hallyday
{
    public function orderReplace(string $str): string
    {
        $tab = str_split($str);

        sort($tab);

        $result = implode($tab);

        return $result;
    }
    public function anagramCreation(string $str) : array
    {
        $words = explode(' ', $str);
        sort($words);
        foreach ($words as $word) {
            $fingerprint = $this->orderReplace($word);
            $groupWords[$fingerprint][] = $word;
        }
        $result = [];
        foreach ($groupWords as $groupWord) {
            if (count($groupWord) > 1) {
                $result[] = $groupWord;
            }
        }
        return $result;

    }

}