<?php

namespace backend\models\api\controllers;

class TwitterController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
