<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Artigo */

$this->title = 'Submeter Artigo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artigo-create submeterartigo">
    <div class="col-lg-12">
        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
