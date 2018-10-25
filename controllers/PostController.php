<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 08.10.2018
 * Time: 21:51
 */

namespace app\controllers;
use yii\web\Controller;
use Yii;
class PostController extends Controller
{
    public function actionTest(){

        return $this->render('test', compact($_POST['login']));
    }
}