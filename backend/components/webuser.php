<?php
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
namespace backend\components;

class WebUser extends \yii\web\User {

    public function init() {
        parent::init();

        $this->authTimeout = (new \yii\db\Query())
            ->select('ParTiemExpi')
            ->from('parametros')
            // ->where('name = :name', ['name' => 'authTimeout'])
            ->scalar();
    }
}
?>
