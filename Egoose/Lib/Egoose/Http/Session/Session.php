<?php/** * Created by PhpStorm. * User: MarjanPopov * Date: 18.11.2016 * Time: 14:42 */namespace Lib\Egoose\Http\Session;class Session {    public static function Init()    {        if(!isset($_SESSION))            session_start();    }    public static function Exists($name)    {        if(isset($_SESSION[$name]))            return true;        return false;    }    public static function Set($name,$value)    {        $_SESSION[$name]=$value;    }    public static function Get($name)    {        return $_SESSION[$name];    }    public static function Remove($name)    {        $_SESSION[$name]=null;    }}