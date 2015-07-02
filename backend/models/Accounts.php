<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "accounts".
 *
 * @property integer $account_id
 * @property string $account_title
 * @property integer $account_cat
 * @property string $account_content
 * @property integer $user_id
 * @property integer $acount_status
 * @property string $createtime
 * @property string $updated
 */
class Accounts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accounts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_cat', 'user_id', 'acount_status'], 'integer'],
            [['account_content', 'createtime'], 'required'],
            [['account_content'], 'string'],
            [['createtime', 'updated'], 'safe'],
            [['account_title'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'account_id' => '主键ID',
            'account_title' => '帐号标题',
            'account_cat' => '分类',
            'account_content' => '内容',
            'user_id' => '用户ID',
            'acount_status' => '帐号状态',
            'createtime' => '创建时间',
            'updated' => 'Updated',
        ];
    }
}
