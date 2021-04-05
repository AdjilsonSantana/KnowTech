<?php


/* @var $model app\models\Artigo */
/* @var $this yii\web\View */
/* @var $model app\models\ArtigoSearch */
/* @var $form yii\widgets\ActiveForm */

use yii\bootstrap4\Html;

?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title"><?= Html::a($model-> titulo, ['artigo/view?id='.$model->idartigo, 'slug' =>$model->slug]) ?></h5>
        <p class="card-text"><?= $model-> preview ?></p>
    </div>
    <div class="card-footer text-right">
        <time class=" badge"><?= $model-> update_at ?></time>
    </div>
</div>

