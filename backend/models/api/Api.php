<?php

namespace backend\models\api;

/**
 * api module definition class
 */
class Api extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'backend\models\api\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSONP;
    }
    public static function createCallback($callname, $arr_tmp){
        $callname = strtolower(str_replace('action', '', $callname)).'ApiCallback';
        if (\Yii::$app->response->format == 'jsonp') {
            $arr_tmp['callback'] = $callname;
            return $arr_tmp;
        }
    }
}
