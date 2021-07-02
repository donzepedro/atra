<?php

use yii\db\Migration;

/**
 * Class m210623_111946_creditor_phys
 */
class m210623_111946_creditor_phys extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->execute("CREATE TABLE creditor_phys
                        (
                         id          int NOT NULL AUTO_INCREMENT,
                         lname       varchar(20) NOT NULL ,
                         fname       varchar(20) NOT NULL ,
                         mname       varchar(20) NULL ,
                         debt_amount int(12) NOT NULL ,
                         inn         int NOT NULL ,
                         region      varchar(20) NOT NULL ,

                        PRIMARY KEY (id)
                        );");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable("creditor_phys");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210623_111946_creditor_phys cannot be reverted.\n";

        return false;
    }
    */
}
