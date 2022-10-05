<?php

namespace backend\models\api\controllers;

use \backend\models\api\models\StockRange75;

class Stocks75Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        echo "Error";
        exit;
        return $this->render('index');
    }
    public function actionCreate()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSONP;
        // \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $callback = 'createApiCallback';
        $stock_range_75 = new StockRange75();
        $stock_range_75->scenario = StockRange75::SCENARIO_CREATE;
        $stock_range_75->attributes = \Yii::$app->request->post();
        if ($stock_range_75->validate()) {
            // return ['status' => true, 'data' => 'Event created successfully'];
            return ['callback' => $callback, 'data' => ['status' => true]];
        }else{
            return ['callback' => $callback, 'data' => $stock_range_75->getErrors()];
        }
    }
    public function actionList()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSONP;
        $callback = 'createApiCallback';
        $stock_range_75 = StockRange75::find()->all();
        if (count($stock_range_75)>0) {
            return ['callback' => $callback,'data' => $stock_range_75];
        }
    }

}
