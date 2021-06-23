<?php

use yii\db\Migration;

/**
 * Class m210623_111931_creditor_legal
 */
class m210623_111931_creditor_legal extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->execute("CREATE TABLE creditor_legal
                    (
                     id            int NOT NULL ,
                     lname         varchar(20) NOT NULL ,
                     fname         varchar(20) NOT NULL ,
                     mname         varchar(20) NULL ,
                     debt_amount   int(12) NOT NULL ,
                     org_name      varchar(100) NOT NULL ,
                     debt_amount_1 int NOT NULL ,
                     region        varchar(20) NOT NULL ,

                    PRIMARY KEY (id)
                    );");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       return $this->dropTable("creditor_legal");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210623_111931_creditor_legal cannot be reverted.\n";

        return false;
    }
    */
}
