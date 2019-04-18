<?php


namespace app\commands;

use app\commands\Controller;

class Backend extends Controller
{
    public function Init()
    {
        $this->layout='main';
        parent::init();
    }
}