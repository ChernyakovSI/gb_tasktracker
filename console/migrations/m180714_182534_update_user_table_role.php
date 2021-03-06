<?php

use yii\db\Migration;

/**
 * Class m180714_182534_update_user_table_role
 */
class m180714_182534_update_user_table_role extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('user', 'id_role');
        $this->addColumn('user', 'id_role', $this->integer()->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180714_182534_update_user_table_role cannot be reverted.\n";

        $this->dropColumn('user', 'id_role');
        $this->addColumn('user', 'id_role', $this->integer());

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180714_182534_update_user_table_role cannot be reverted.\n";

        return false;
    }
    */
}
