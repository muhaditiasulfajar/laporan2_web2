<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obat026}}`.
 */
class m230523_114646_create_obat026_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat026}}', [
            'id' => $this->primaryKey(),
            'kode_obat' => $this->varchar(12),
            'harga' => $this->integer(),
            'stok_obat' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obat026}}');
    }
}
