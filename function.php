<?php
    //共通関数定義

    //2進数から10進数の変換
    function bin_to_dec($bin)
    {
        return intval($bin, 2);
    }

    //16進数から10進数の変換
    function hex_to_dec($hex)
    {
        return intval($hex, 16);
    }

?>