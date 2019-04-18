<?php

namespace app\module\backend\controllers;

use app\commands\Backend;
use app\models\WxBook;

class DefaultController extends Backend
{
    public function actionIndex()
    {
//        $this->layout='main';
    	$data=WxBook::find()->all();


        return $this->render('index',compact('data'));
    }
    public function actionLogin()
    {
//        $this->layout='main';
        return $this->render('login');
    }
}

