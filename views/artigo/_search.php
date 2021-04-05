<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArtigoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="artigo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'procurar_artigo') ?>

    <?php ActiveForm::end(); ?>

</div>
