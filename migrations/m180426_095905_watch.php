<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180426_095905_watch
 */
class m180426_095905_watch extends Migration
{

    public function safeUp()
    {
        $this->createTable('watch',array (
            'id' => $this->primaryKey(),
            'ad' => $this->string(200)->notNull(),
			'soyad' => $this->text()->notNull(),
        ));

        $this->createTable('tarih',array (
            'id'=> $this->primaryKey(),
            'tarihsaat' => $this->datetime(),
			'yer' => $this->text()->notNull(),
        ));
    }

    public function safeDown()
    {
        $this -> dropTable('watch');
        $this -> dropTable('tarih');
    }


}
