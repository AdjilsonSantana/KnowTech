<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
/**
 * @var $this yii\web\View
 * @var $form yii\bootstrap4\ActiveForm
 * @var user\models\forms\LoginForm $model
 */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

?>
    <div class="user-default-login">

        <h1><?= Html::encode($this->title) ?></h1>
        <br>
        <div class="subform">
            <p> Por favor, preencha os campos para aceder a sua conta:</p>
            <br>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-6\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

            <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
            <br>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group text-right">
                <div class="col-lg-offset-1 col-lg-8" style="padding-right: 85px">
                    <?= $form->field($model, 'rememberMe')->checkbox([]) ?>
                    <?= Html::a(Yii::t("user", "Recuperar Senha") , ["/user/forgot"]) ?>

                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>

                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>

    </div>
