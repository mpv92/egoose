<?php/** * Created by PhpStorm. * User: MarjanPopov * Date: 16.11.2016 * Time: 16:56 */namespace Lib\Egoose\Http\Parameters;class Params{    public static function Get($key)    {        if(isset($_GET[$key]))            return $_GET[$key];        return null;    }    public static function Post($key)    {        if(isset($_POST[$key]))            return $_POST[$key];        return null;    }}