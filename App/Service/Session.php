<?php

include_once "Users.php";

class Session extends User
{
    private $sessionId;

    public function __construct()
    {
        $this->start();
    }

    public function setName($name)
    {
        $this->setName($name);
    }

    public function start()
    {
        session_start();
    }

    public function destroy()
    {
        session_abort();
    }


}
