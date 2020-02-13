<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Properties */
/* @var $pageType app\models\Properties */

$this->title = 'Create Properties';
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="properties-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form/_form_and_img', [
        'model' => $model,
        'pageType' => 'create',
    ]) ?>

</div>
