<?php
class VariablesExample
{
    private static $loginAdminUser = array("id" => "1", "username" => "AnitaAnila", "password" => "12345678", 'role' => '1', 'age' => '22');
    private static $loginSimpleUser = array("id" => "2", "username" => "Genta", "password" => "12345678", 'role' => '0', 'age' => '25');
    private static $loginSimpleUser1 = array("id" => "3", "username" => "Anjeza", "password" => "12345678", 'role' => '0', 'age' => '32');
    private static $loginSimpleUser2 = array("id" => "4", "username" => "Betina", "password" => "12345678", 'role' => '0', 'age' => '24');
    private static $loginSimpleUser3 = array("id" => "5", "username" => "Leonit", "password" => "12345678", 'role' => '0', 'age' => '57');
    private static $loginSimpleUser4 = array("id" => "6", "username" => "Armend", "password" => "12345678", 'role' => '0', 'age' => '61');

    private static $users;
    public static function getUsers()
    {
        self::$users = array(self::$loginAdminUser, self::$loginSimpleUser, self::$loginSimpleUser1, self::$loginSimpleUser2, self::$loginSimpleUser3, self::$loginSimpleUser4);
        return self::$users;
    }
    
}


//te dhenat e simuluara nga DB
