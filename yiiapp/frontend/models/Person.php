<?php

namespace frontend\models;

use yii\base\Model;

class Person extends Model
{
    public $id;
    public $name;
    public $email;
    public $gender;
    public function rules()
    {
        return[
            [['name','email','gender'],'required'],
            [['name','email'],'string','max'=>50],
            ['email','email'],
            ['gender','in','range'=>['erkak','ayol']]

        ];
    }
    public function save()
    {
        $sql = "INSERT INTO person (`name`, `email`, `gender`)
            VALUES (:name, :email, :gender)";
        $values = [
            ':name' => $this->name,
            ':email' => $this->email, // Removed the extra space
            ':gender' => $this->gender,
        ];
        $command = \Yii::$app->db->createCommand($sql)->bindValues($values); // Changed `bindValue` to `bindValues`
        return $command->execute();
    }


}