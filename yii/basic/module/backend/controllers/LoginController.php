<?php

namespace app\module\backend\controllers;

use yii\web\controller;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Admin;

use yii;

class LoginController extends controller
{
    public function actionLogin()
    {      

         $this->layout='main-login';
         $request = Yii::$app->request;
         $model = new LoginForm();
         
         	if ($request->isPost) {
			$data=Yii::$app->request->post();
	    	$username=$data['LoginForm']['username'];
            $password=$data['LoginForm']['password'];
            
           $data1=Admin::find()->where(['username'=>$username,'password_hash'=>$password])->one();
          

          if($data1){
             $session =Yii::$app->session;
             $session->open();
             $language = $session->set('qwe',21321);
             return $this->redirect(['/backend/default/index']);
          }else{
          	  return $this->redirect(['/backend/login/login']);
          }

         }
       
         
    	return $this->render('login', [
            'model' => $model,
        ]);
      
    }



  
}