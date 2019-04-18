<?php

namespace app\module\backend\controllers;

use app\commands\Backend;

/**
 * Default controller for the `backend` module
 */
class CateController extends Backend
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionShow()
    {
//        $this->layout='main';
        return $this->render('show');
    }
}