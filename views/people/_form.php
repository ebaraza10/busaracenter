<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonsDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<?php if(Yii::$app->session->hasFlash('errorsavingrecord')): ?>
<div class="col-lg-12" style="width:380px;margin-top:5px;margin-bottom:5px;position:relative;";>
        <div class="alert alert-danger" role="alert" style="left:-10px;position:relative;">
            <?= Yii::$app->session->getFlash('errorsavingrecord') ?>
        </div>
        </div>
<?php endif; ?>
<div class="persons-details-form" style="width:30%;">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Register' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
