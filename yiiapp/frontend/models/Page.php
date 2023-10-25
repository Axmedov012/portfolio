<?php
/** class page model
*  @property integer $employeeNumber
 * @property string $Name
 * @property string $extension
 * @property string $email
 * @property int $officeCode
 * @property integer $reportsTo
 * @property string $jobTitle
 */
//pagination

namespace frontend\models;
use yii\db\ActiveRecord;

class Page extends ActiveRecord
{
    public $fullname;
    public $myFile;
    public static function tableName()
    {
        return "person";
    }
}