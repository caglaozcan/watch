<?php

namespace kouosl\watch\models;

use Yii;

/**
 * This is the model class for table "watch_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $watch_id
 *
 * @property Watch $watch
 */
class WatchData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'watch_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'watch_id'], 'required'],
            [['watch_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['watch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Watch::className(), 'targetAttribute' => ['watch_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'watch_id' => 'Watch ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWatch()
    {
        return $this->hasOne(Watch::className(), ['id' => 'watch_id']);
    }
}
