<?php

use yii\db\Migration;

/**
 * Class m210623_084143_foreign_language
 */
class m210624_115635_foreign_language extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->execute("CREATE TABLE foreign_language
                        (
                         id       int NOT NULL AUTO_INCREMENT,
                         id_am    int NOT NULL ,
                         language varchar(50) NOT NULL ,
                         level    varchar(20) NOT NULL ,

                        PRIMARY KEY (id),
                        KEY fkIdx_104 (id_am),
                        CONSTRAINT FK_103 FOREIGN KEY fkIdx_104 (id_am) REFERENCES arbitration_manager (id)
                        );");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable("foreign_language");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210624_115635_foreign_language cannot be reverted.\n";

        return false;
    }
    */
}