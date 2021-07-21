<?php

class User
{
    private $name;
    private $password;
    private $id;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }

    public function isAuthenticationInfoCorrect($name, $password)
    {
        if ($this->name == $name && $this->password == $password)
        {
            $_SESSION["is_auth"] = true;
            $_SESSION["login"] = $this->name;
            return true;
        }
        else
        {
            return false;
        }
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
}

class Authentication
{
    private $authentication;
    private $user;
    public function __construct()
    {
        $this->user = new User("admin", "admin");
    }

    public function isAuth()
    {
        if ($_SESSION['ua'] != $_SESSION['HTTP_USER_AGENT'])
        {
            die('Wrong browser');
        }
        if (isset($_SESSION["is_auth"]))
        {
            return $_SESSION["is_auth"];
        }
        else return false;
    }

    public function auth($login, $pass)
    {
        return $this->user->isAuthenticationInfoCorrect($login, $pass);
    }

    public function getLogin()
    {
        if ($this->isAuth())
        {
            return $this->user->getName();
        }
        else {return false;}
    }

    public function logOut()
    {
        $_SESSION = array(); //Очищаем сессию
        session_destroy(); //Уничтожаем
        $this->authentication = false;
    }
}

