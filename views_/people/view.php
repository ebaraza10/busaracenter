<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PersonsDetails */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'People List', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="persons-details-view">

    <h1><?= Html::encode("Person Details") ?></h1>
    <?php if(Yii::$app->session->hasFlash('successsavingrecord')): ?>
    <div class="col-lg-12" style="width:590px;margin-top:5px;margin-bottom:5px;position:relative;";>
            <div class="alert alert-success" role="alert" style="left:-10px;position:relative;">
                <?= Yii::$app->session->getFlash('successsavingrecord') ?>
            </div>
            </div>
    <?php endif; ?>
<div class="persons-details-view" style="width:50%;">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'age',
            'phone_number',
        ],
    ]) ?>
</div>

</div>
