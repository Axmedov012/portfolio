<br>
<br>
<br>

<?php
//active record

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin();
echo $form->field($model,'name');
echo $form->field($model,'email');
echo $form->field($model,'gender');

echo Html::submitButton('Send',['class'=>'btn btn-primary']);
ActiveForm::end();
