<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';

$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login">

    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <div class="subform">
        <p> Por favor, preencha os campos para aceder a sua conta:</p>
        <br>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-lg-5\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label mx-5'],
            ],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <div class="form-group text-right">
            <div class="col-lg-offset-1 col-lg-8" style="padding-right: 75px">
                <?= $form->field($model, 'rememberMe')->checkbox([]) ?>
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>

