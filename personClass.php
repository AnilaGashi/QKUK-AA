<?php

abstract class Person
{
    private $username;
    private $password;
    private $age;
    private $role;

    function __construct($username, $password, $age, $role)
    {
        $this->$username = $username;
        $this->$password = $password;
        $this->$age = $age;
        $this->$role = $role;
    }

    abstract protected function setSession();
    abstract protected function setCookie();

    protected function getUsername()
    {
        return $this->username;
    }
}
