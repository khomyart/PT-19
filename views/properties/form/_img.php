<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Properties */

?>

<?= Html::img($model->photo_url, [
        'class' => 'img-responsive',
        'style' => 'margin-top:26px'
    ]);
?>