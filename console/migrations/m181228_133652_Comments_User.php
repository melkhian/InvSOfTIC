<?php

use yii\db\Migration;

/**
 * Class m181228_133652_Comments_User
 */
class m181228_133652_Comments_User extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      ALTER TABLE `user` CHANGE `ususeguapel` `ususeguapel` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Segundo Apellido', CHANGE `username` `username` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usuario', CHANGE `email` `email` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Correo', CHANGE `status` `status` SMALLINT(6) NOT NULL DEFAULT '10' COMMENT 'Estado';
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181228_133652_Comments_User cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181228_133652_Comments_User cannot be reverted.\n";

        return false;
    }
    */
}
