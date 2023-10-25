<?php

use yii\db\Migration;

/**
 * Class m231019_191250_create_table_post
 */
class m231019_191250_create_table_post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(60)->notNull(),
            'content' => $this->text(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime(),
            'type'=> $this->integer()->notNull()->defaultValue(10),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('post');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231019_191250_create_table_post cannot be reverted.\n";

        return false;
    }
    */
}
