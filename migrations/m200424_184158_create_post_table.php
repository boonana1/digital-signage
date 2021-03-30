<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m200424_184158_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->notNull(), //Автор
            'date' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(), //Номер категории
            'text' => $this->string()->unique(),
            'title' => $this->string()->notNull()->unique(), // Название статьи
            'abridgment' => $this->string()->notNull(), // Сокращенный текст
            'activity' => $this->integer()->notNull()->defaultValue(0), // Активность статьи
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
