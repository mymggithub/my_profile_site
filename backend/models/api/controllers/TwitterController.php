<?php

namespace backend\models\api\controllers;


use \backend\models\api\models\Twitter;
use \backend\models\api\Api;

class TwitterController extends \yii\web\Controller
{
    public function behaviors()
    {
        return array_merge(parent::behaviors(), [

            // For cross-domain AJAX request
            'corsFilter'  => [
                'class' => \yii\filters\Cors::className(),
                'cors'  => [
                    // restrict access to domains:
                    'Origin'                           => static::allowedDomains(),
                    'Access-Control-Request-Method'    => ['POST'],
                    'Access-Control-Allow-Credentials' => true,
                    'Access-Control-Max-Age'           => 3600,                 // Cache (seconds)
                ],
            ],

        ]);
    }
    public function actionIndex()
    {
        echo "Welcome to the index";
        exit;
    }
    public function actionAdd()
    { 
        $callback = strtolower(str_replace('action', '', __FUNCTION__)).'ApiCallback';
        $stock_range_75 = new Twitter();
        $stock_range_75->scenario = Twitter::SCENARIO_ADD;
        $stock_range_75->attributes = \Yii::$app->request->post();
        if ($stock_range_75->validate()) {
            // return ['status' => true, 'data' => 'Event created successfully'];
            return Api::createCallback(__FUNCTION__, ['data' => ['status' => true]]);;
        }else{
            return Api::createCallback(__FUNCTION__, ['data' => $stock_range_75->getErrors()]);
        }
    }
    public function actionPing()
    {
        return Api::createCallback(__FUNCTION__, ['data' => 'Pong']);
    }
}
