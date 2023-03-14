<?php
/**
 * created by: tushar Khan
 * email : tushar.khan0122@gmail.com
 * date : 3/15/2023
 */


use Illuminate\Support\Facades\Route;

if (!function_exists('divideSentence')) {
    function divideSentence($text)
    {
        $text = explode(' ', $text);
        $length = count($text);
        if ($length < 2) return [
            'firstHalf' => $text[0],
            'secondHalf' => ''
        ];

        $half = $length/2;
        $firstHalf = array_slice($text, 0, $half);
        $secondHalf = array_slice($text, $half);

        return [
            'firstHalf' => implode(' ', $firstHalf),
            'secondHalf' => implode(' ', $secondHalf)
        ];
    }
}


if (!function_exists('createBannerText')) {
    function createBannerText($text)
    {
        $text = divideSentence($text);

        return '<h2 class="title-head"> ' . $text['firstHalf'] . ' <span>' . $text['secondHalf'] . '</span></h2>';
    }
}


if (!function_exists('currentRouteName')) {
    function currentRouteName(): ?string
    {
        return Route::currentRouteName();
    }
}
