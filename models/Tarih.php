<?php

namespace kouosl\watch\models;

use Yii;

/**
 * This is the model class for table "tarih".
 *
 * @property int $id
 * @property string $tarihsaat
 * @property string $yer
 */
class Tarih extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tarih';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tarihsaat'], 'safe'],
            [['yer'], 'required'],
            [['yer'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tarihsaat' => 'Tarihsaat',
            'yer' => 'Yer',
        ];
    }
}
