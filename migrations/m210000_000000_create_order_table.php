<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cow}}`.
 */
class m210000_000000_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'pol' => $this->integer(),
            'feetsize' => $this->integer(),
            'samesocks' => $this->integer(),
            'chosensocks' => $this->integer(),
            'answers' => $this->integer(),
            'date' => $this->bigInteger(),
            'text' => $this->text(),
            'time' => $this->bigInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }
}
