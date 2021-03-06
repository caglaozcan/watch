<?php

namespace kouosl\watch\models;

use Yii;

/**
 * This is the model class for table "watch".
 *
 * @property int $id
 * @property string $ad
 * @property string $soyad
 */
class Watch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'watch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ad', 'soyad'], 'required'],
            [['soyad'], 'string'],
            [['ad'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ad' => 'Ad',
            'soyad' => 'Soyad',
        ];
    }
}
