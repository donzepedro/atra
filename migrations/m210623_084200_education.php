<?php

use yii\db\Migration;

/**
 * Class m210623_084200_education
 */
class m210623_084200_education extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->execute("CREATE TABLE education
                    (
                     id          int NOT NULL ,
                     id_am       int NOT NULL ,
                     speciality  varchar(100) NOT NULL ,
                     level       varchar(30) NOT NULL ,
                     start_date  date NOT NULL ,
                     end_date    date NULL ,
                     institution varchar(100) NOT NULL ,

                    PRIMARY KEY (id),
                    KEY fkIdx_110 (id_am),
                    CONSTRAINT FK_109 FOREIGN KEY fkIdx_110 (id_am) REFERENCES arbitration_manager (id)
                    );
");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        return $this->dropTable("education");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210623_084200_education cannot be reverted.\n";

        return false;
    }
    */
}
