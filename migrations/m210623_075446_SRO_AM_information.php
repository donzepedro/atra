<?php

use yii\db\Migration;

/**
 * Class m210623_075446_SRO_AM_information
 */
class m210623_075446_SRO_AM_information extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->execute("CREATE TABLE SRO_AM_information
                        (
                         id                    int NOT NULL ,
                         id_am                 int NOT NULL ,
                         SRO_name              varchar(100) NOT NULL ,
                         membership_start_date date NOT NULL ,
                         membership_end_date   date NOT NULL ,
                         leave_reason          varchar(255) NOT NULL ,

                        PRIMARY KEY (id),
                        KEY fkIdx_87 (id_am),
                        CONSTRAINT FK_86 FOREIGN KEY fkIdx_87 (id_am) REFERENCES arbitration_manager (id)
                        );");
            
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        return $this->dropTable("SRO_AM_information");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210623_075446_SRO_AM_information cannot be reverted.\n";

        return false;
    }
    */
}
