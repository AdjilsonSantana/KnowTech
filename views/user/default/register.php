<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/**
 * @var $this yii\web\View
 * @var yii\web\View $this
 * @var $form ActiveForm
 * @var user\Module $module
 * @var user\models\User $user
 * @var user\models\User $profile
 * @var string $userDisplayName
 */

$module = $this->context->module;

$this->title = 'Registar';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="user-default-register">

    <h1><?php echo Html::encode($this->title)?></h1>
    <br>
    <br>
    <br>
    <?php if ($flash = Yii::$app->session->getFlash("Register-success")): ?>

        <div class="alert alert-success">
            <p><?= $flash ?></p>
        </div>

    <?php else: ?>

    <div class="subform">
        <?php $form = ActiveForm::begin([

            'id' => 'register-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-6\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
            'enableAjaxValidation' => true,
        ]); ?>

        <?php if ($module->requireEmail): ?>
            <?= $form->field($user, 'email') ->textInput() ?>
        <?php endif; ?>
        <?php if ($module->requireUsername): ?>
            <?= $form->field($user, 'username') ->textInput() ?>
        <?php endif; ?>
        <br>
        <?= $form->field($user, 'newPassword')->passwordInput() ?>

        <?php /* uncomment if you want to add profile fields here
        <?= $form->field($profile, 'full_name') ?>
        */ ?>

        <div class="form-group text-right">
            <div class="col-lg-offset-1 col-lg-8"style="padding-right:85px">
                <?= Html::submitButton('Registar', ['class' => 'btn btn-primary'])?>

                <br/><br/>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

        <?php if (Yii::$app->get("authClientCollection", false)): ?>
            <div class="col-lg-offset-2 col-lg-10">
                <?= yii\authclient\widgets\AuthChoice::widget([
                    'baseAuthUrl' => ['/user/auth/login']
                ]) ?>
            </div>
        <?php endif; ?>

    <?php endif; ?>

</div>