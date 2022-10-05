<?php

namespace backend\models\api\models;

use Yii;

/**
 * This is the model class for table "stock_range_75".
 *
 * @property int $r_75_id
 * @property int|null $s_id
 * @property string $symbol
 * @property string $adj_up_start_date
 * @property string $adj_up_end_date
 * @property int $adj_up
 * @property int $adj_down
 * @property string $close_up_start_date
 * @property string $close_up_end_date
 * @property int $close_up
 * @property int $close_down
 * @property float $close_up_percent
 */
class StockRange75 extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stock_range_75';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['s_id', 'adj_up', 'adj_down', 'close_up', 'close_down'], 'integer'],
            [['symbol', 'adj_up_start_date', 'adj_up_end_date', 'adj_up', 'adj_down', 'close_up_start_date', 'close_up_end_date', 'close_up', 'close_down', 'close_up_percent'], 'required'],
            [['close_up_percent'], 'number'],
            [['symbol', 'adj_up_start_date', 'adj_up_end_date', 'close_up_start_date', 'close_up_end_date'], 'string', 'max' => 250],
            [['symbol'], 'unique'],
        ];
    }

    public function scenarios(){
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['symbol', 'close_up'];
        return $scenarios;
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'r_75_id' => 'R  75 ID',
            's_id' => 'S ID',
            'symbol' => 'Symbol',
            'adj_up_start_date' => 'Adj Up Start Date',
            'adj_up_end_date' => 'Adj Up End Date',
            'adj_up' => 'Adj Up',
            'adj_down' => 'Adj Down',
            'close_up_start_date' => 'Close Up Start Date',
            'close_up_end_date' => 'Close Up End Date',
            'close_up' => 'Close Up',
            'close_down' => 'Close Down',
            'close_up_percent' => 'Close Up Percent',
        ];
    }
}
