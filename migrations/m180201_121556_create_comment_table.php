<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m180201_121556_create_comment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comment');
    }
}
