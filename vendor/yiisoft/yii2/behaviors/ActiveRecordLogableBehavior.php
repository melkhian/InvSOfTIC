<?php
class ActiveRecordLogableBehavior extends CActiveRecordBehavior
{
    private $_oldattributes = array();
 
    public function afterSave($event)
    {
        if (!$this->Owner->isNewRecord) {
 
            // new attributes
            $newattributes = $this->Owner->getAttributes();
            $oldattributes = $this->getOldAttributes();
 
            // compare old and new
            foreach ($newattributes as $name => $value) {
                if (!empty($oldattributes)) {
                    $old = $oldattributes[$name];
                } else {
                    $old = '';
                }
 
                if ($value != $old) {
                    //$changes = $name . ' ('.$old.') => ('.$value.'), ';
 
                    $log = new auditorias;
                    // $log->description=  'User ' . Yii::app()->user->Name
                    //                         . ' changed ' . $name . ' for '
                    //                         . get_class($this->Owner)
                    //                         . '[' . $this->Owner->getPrimaryKey() .'].';
                    $log->AudId = Yii::$app->user->identity->id;
                    $log->UsuId_fk = Yii::$app->user->identity->username;
                    $log->AudAcci =  'update';
                    // $log->model=        get_class($this->Owner);
                    // $log->idModel=      $this->Owner->getPrimaryKey();
                    $log->AudIp = Yii::app()->request->getUserHostAddress();
                    $log->AudFechHora = new \yii\db\Expression('NOW()'),//new CDbExpression('NOW()');
                
                    $log->save();
                }
            }
        } else {
            $log = new auditorias;
            // $log->description=  'User ' . Yii::app()->user->Name
            //                         . ' created ' . get_class($this->Owner)
            //                         . '[' . $this->Owner->getPrimaryKey() .'].';
            $log->AudIp = Yii::$app->user->identity->id;
            $log->UsuId_fk = Yii::$app->user->identity->username;
            $log->AudAcci = 'create';
            // $log->model=        get_class($this->Owner);
            // $log->idModel=      $this->Owner->getPrimaryKey();
            // $log->field=        '';
            // $log->creationdate= new CDbExpression('NOW()');
            $log->AudIp = Yii::app()->request->getUserHostAddress();
            $log->AudFechHora = new \yii\db\Expression('NOW()'),            
            $log->save();
        }
    }
 ///////////////////////////////////////////////////////////////////////////////////

    public function afterDelete($event)
    {
        $log=new auditorias;
        // $log->description=  'User ' . Yii::app()->user->Name . ' deleted '
        //                         . get_class($this->Owner)
        //                         . '[' . $this->Owner->getPrimaryKey() .'].';
        $log->AudIp = Yii::$app->user->identity->id;
        $log->UsuId_fk = Yii::$app->user->identity->username;
        $log->AudAcci = 'DELETE';
        // $log->model=        get_class($this->Owner);
        // $log->idModel=      $this->Owner->getPrimaryKey();
        // $log->field=        '';
        // $log->creationdate= new CDbExpression('NOW()');
        $log->AudIp = Yii::app()->request->getUserHostAddress();
        $log->AudFechHora = new \yii\db\Expression('NOW()'),  
        // $log->userid=       Yii::app()->user->id;        
        $log->save();
    }
 ///////////////////////////////////////////////////////////////////////////////////////
    public function afterFind($event)
    {
        // Save old values
        $this->setOldAttributes($this->Owner->getAttributes());
    }
 
    public function getOldAttributes()
    {
        return $this->_oldattributes;
    }
 
    public function setOldAttributes($value)
    {
        $this->_oldattributes=$value;
    }
}
?>