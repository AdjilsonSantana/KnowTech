<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Artigo */

$this->title = $model->titulo;
$this->params['breadcrumbs'][] = ['label' => 'Artigos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="artigo-view">
    <div class="row">
        <div class="col-md-10  offset-1">
            <br>
            <a><h3 class="text-center"><?= html::encode($this->title)?> </h3></a>
            <hr>
            <?php if (isset($model->ficheiro)) { ?>
                <div>
                    <img class=" img-fluid rounded" src="../../<?= $model->ficheiro ?>" style="height: 400px">
                </div>

            <?php }?>
            <br><br>
            <div class="justify-content-center">
                <?=$model->texto ?>
            </div>

            <hr>
            <div class="row">
                <div class="col-xs mx-3">
                    <p><time class="badge"><?=$model->update_at?></time></p>
                </div>
                <div class="col-xs ml-auto">
                    <p class="text-right mx-3" >
                        <?= Html::a('Update', ['update', 'id' => $model->idartigo, 'visible' => !Yii::$app->user->isGuest ], ['class' => 'btn btn-primary badge']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->idartigo], [
                            'class' => 'btn btn-danger badge',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

