<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 */
class m161221_230036_create_comments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('comments', [
            'comm_id' => $this->primaryKey(),
            'comm_text' => $this->text(),
            'comm_video_id' => $this->string(10),
            'comm_user_id' => $this->string(100),
        ],  $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comments');
    }
}
