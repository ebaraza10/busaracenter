<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PersonsDetails */

$this->title = 'Person Registration';
$this->params['breadcrumbs'][] = ['label' => 'People List', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persons-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
