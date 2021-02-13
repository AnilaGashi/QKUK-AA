<?php
require 'variables.php';
include_once 'adminClass.php';
include_once 'simpleUserClass.php';
session_start();

if (isset($_POST['login-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else {
    header("Location:../a/index.php");
}

class LoginLogic
{
private $username = "";
private $password = "";

 public function __construct($formData)
 {
 $this->username = $formData['username'];
 $this->password = $formData['password'];
  }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            header("Location:../a/index.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password) != null) {
            header('Location:../a/home.php');
        } else
            header("Location:../a/index.php");
    }

    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $loggedInUser = null;
        $users = VariablesExample::getUsers();

        foreach ($users as $user) {
            if ($user['username'] == $username && $user['password'] == $password) {
                if ($user['role'] == 1) {
                    $loggedInUser = new Admin($user['id'], $user['username'], $user['password'], $user['role']);
                    break;
                } else {
                    $loggedInUser = new SimpleUser($user['id'], $user['username'], $user['password'], $user['role']);
                    break;
                }
                return true;
            }
        }
        if ($loggedInUser != null) {
            $loggedInUser->setSession();
            $loggedInUser->setCookie();
        }
        return $loggedInUser;
    }
}
