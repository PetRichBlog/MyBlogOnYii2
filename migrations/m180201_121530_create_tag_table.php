<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tag`.
 */
class m180201_121530_create_tag_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tag', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tag');
    }
}
