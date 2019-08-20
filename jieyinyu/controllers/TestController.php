<?php
/**
 * Created by PhpStorm.
 * User: work_
 * Date: 2019/8/18
 * Time: 22:36
 */

namespace jieyinyu\controllers;


use yii\web\Controller;

class TestController extends Controller
{
    public function actionSay($message = "Hello")
    {
        return $this->render('say', ['message' => $message]);
    }
}