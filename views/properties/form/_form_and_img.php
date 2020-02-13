<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Properties */
/* @var $pageType app\models\Properties */

$getForm = $this->render('_form', ['model' => $model,'pageType' => $pageType,]);

?>

<div class="properties-view">

    <?php if (!empty($model->photo_url)): ?>
        <div class="row">
            <div class="col-md-5">
                <?= $this->render('_img', [
                        'model' => $model,
                ]); ?>
            </div>
            <div class="col-md-7">
                <?= $getForm; ?>
            </div>
        </div>
    <?php else:
        echo $getForm;
    endif; ?>

</div>
