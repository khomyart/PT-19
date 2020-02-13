<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Properties */
/* @var $form yii\widgets\ActiveForm */
/* @var $pageType app\models\Properties */

$pageType == 'view' ? $textInputsAttributes['readOnly'] = true : $textInputsAttributes['readOnly'] = false;

?>

<div class="properties-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput($textInputsAttributes + ['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_url')->textInput($textInputsAttributes + ['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea($textInputsAttributes + ['rows' => 6]) ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'rooms')->textInput($textInputsAttributes) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'accommodates')->textInput($textInputsAttributes) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'bathrooms')->textInput($textInputsAttributes) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'beds')->textInput($textInputsAttributes) ?>
        </div>
    </div>
    <div class="pull-right">
        <?php if ($pageType != 'view'): ?>
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?php else: ?>
            <?= Html::a('Update', ['update', 'id' => $model->id], [
                'class' => 'btn btn-primary',
            ]) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        <?php endif; ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
