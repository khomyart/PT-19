<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Properties */
/* @var $pageType app\models\Properties */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

?>
<div class="properties-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form/_form_and_img', [
        'model' => $model,
        'pageType' => $pageType,
    ]) ?>

</div>
