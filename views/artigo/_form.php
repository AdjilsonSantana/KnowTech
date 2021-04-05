<?php

use app\models\Categoria;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Artigo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="artigo-form">
    <div class="col-md-11 subform">
        <br><br>
        <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

        <?= $form->field($model, 'categoria_nomecategoria') -> dropDownList(
            ArrayHelper::map(Categoria::find() ->all(),'nomecategoria','nomecategoria' )
        )?>


        <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'ficheiro')->fileInput() ?>

        <?= $form->field($model, 'texto')->textarea(['rows' => 10]) ?>

        <div class="row">
            <div class="col-sm-12">
                <div class="text-right" style="padding-top: 20px">
                    <?= Html::submitButton(Yii::t('app', 'Submeter'), ['class' => 'btn btn-primary ']) ?>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
