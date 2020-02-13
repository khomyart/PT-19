<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PropertiesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="properties-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?//= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?//= $form->field($model, 'photo_url') ?>

    <?//= $form->field($model, 'description') ?>

    <?= $form->field($model, 'rooms') ?>

    <?= $form->field($model, 'accommodates') ?>

    <?= $form->field($model, 'bathrooms') ?>

    <?= $form->field($model, 'beds') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
