<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonsDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'People List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persons-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Register A New Person', ['registration'], ['class' => 'btn btn-success','style'=>'float:right;margin-bottom:5px;']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',],
            'name',
            'age',
            'phone_number',
        ],
    ]); ?>
</div>
