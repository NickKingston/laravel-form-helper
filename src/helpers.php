<?php


if (!function_exists('html_input_field')) {

    function html_input_field($string)
    {
        return app(\NickKingston\LaravelFormHelper\HtmlInputField::class)->create($string);
    }
}
//
//if (!function_exists('html_select_field')) {
//
//    function html_attributes(...$attributesList)
//    {
//        return "html_select_field";
//    }
//}
