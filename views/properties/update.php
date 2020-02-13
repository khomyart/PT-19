<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Properties */
/* @var $pageType app\models\Properties */

$this->title = 'Update Properties: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="properties-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form/_form_and_img', [
        'model' => $model,
        'pageType' => $pageType,
    ]) ?>

</div>
