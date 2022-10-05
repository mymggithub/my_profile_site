<?php

namespace backend\models\api\models;

use Yii;

/**
 * This is the model class for table "twitter".
 *
 * @property int $twit_id
 * @property int $proj_id
 * @property string $account
 * @property int $following
 * @property int $followers
 * @property string $description
 */
class Twitter extends \yii\db\ActiveRecord
{
    const SCENARIO_ADD = 'add';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'twitter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['proj_id', 'account', 'following', 'followers', 'description'], 'required'],
            [['proj_id', 'following', 'followers'], 'integer'],
            [['account', 'description'], 'string', 'max' => 250],
        ];
    }

    public function scenarios(){
        $scenarios = parent::scenarios();
        $scenarios['add'] = ['proj_id', 'account', 'following', 'followers', 'description'];
        return $scenarios;
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'twit_id' => 'Twit ID',
            'proj_id' => 'Proj ID',
            'account' => 'Account',
            'following' => 'Following',
            'followers' => 'Followers',
            'description' => 'Description',
        ];
    }
}
