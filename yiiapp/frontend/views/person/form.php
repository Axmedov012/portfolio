<br>
<br>
<br>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>

<?php $form = ActiveForm::begin(); ?>

<?=  $form->field($model, 'name') ?>

<div style="margin-top:1rem;"> <?= $form->field($model, 'email') ?>  </div>

<div style="margin-top:1rem;"> <?= $form->field($model, 'gender') ?>  </div>

    <div class="form-group">
        <?= Html::submitButton('Jonatish', ['class' => 'mt-4 btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
