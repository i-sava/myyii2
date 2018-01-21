<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.01.2018
 * Time: 0:06
 */

namespace app\controllers;


use phpDocumentor\Reflection\Types\Null_;
use yii\web\Controller;

class MyController extends Controller
{


    public function actionIndex($id = Null){
        $hi = 'Hello Word';
        return $this->render('index', compact('hi','id'));
    }


}