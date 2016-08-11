<?php
namespace userObject\userObject;

Class userObject
{
    public function __construct()
    {
    }

    public function showText()
    {
        echo 'Hello world.';
    }
}

$obj = new userObject();
$obj->showText();