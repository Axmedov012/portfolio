<?php
//active record
namespace common\models;

use yii\db\ActiveRecord;

class Record extends ActiveRecord
{
    public static function tableName()
    {
        return '{{person}}';
    }
    public function rules()
    {
        return [
            [['name','email','gender'],'required'],
            [['name','email','gender'],'string'],
        ];
    }
    public function afterFind()
    {
        $this->gender = "Ayolcha";
    }
}