<?php

use yii\db\Migration;

/**
 * Class m200212_170758_create_table_properties
 */
class m200212_170758_create_table_properties extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('properties',[
            'id' => $this->primaryKey(11)->unsigned()->notNull(),
            'title' => $this->string(255)->defaultValue('')->notNull(),
            'photo_url' => $this->string(255)->defaultValue('')->notNull(),
            'description' => $this->text()->null(),
            'rooms' => $this->smallInteger(6)->unsigned()->defaultValue(0)->notNull(),
            'accommodates' => $this->smallInteger(6)->unsigned()->defaultValue(0)->notNull(),
            'bathrooms' => $this->smallInteger(6)->unsigned()->defaultValue(0)->notNull(),
            'beds' => $this->smallInteger(6)->unsigned()->defaultValue(0)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('properties');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200212_170758_create_table_properties cannot be reverted.\n";

        return false;
    }
    */
}
