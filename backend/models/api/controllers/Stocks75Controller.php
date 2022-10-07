<?php

namespace backend\models\api\controllers;

use \backend\models\api\models\StockRange75;

use \backend\models\api\Api;

use Yii;


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
        if (!Yii::$app->user->isGuest) {
            $stock_range_75 = new StockRange75();
            $stock_range_75->scenario = StockRange75::SCENARIO_CREATE;
            $stock_range_75->attributes = \Yii::$app->request->post();
            if ($stock_range_75->validate()) {
                return Api::createCallback(__FUNCTION__, ['status' => true, 'data' => 'Event created successfully']);
            }else{
                return Api::createCallback(__FUNCTION__, ['data' => $stock_range_75->getErrors()]);
            }
        }
    }
    public function actionList()
    {
        if (!Yii::$app->user->isGuest) {
            if (count($stock_range_75)>0) {
                $stock_range_75 = StockRange75::find()->all();
                return Api::createCallback(__FUNCTION__, ['data' => $stock_range_75]);
            }
        }else {
            return Api::createCallback(__FUNCTION__, ['data' => 'Login Required']);
        }
    }

}
