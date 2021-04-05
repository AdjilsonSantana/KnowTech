<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contacte-nos';
$this->params['breadcrumbs'][] = 'Contact';
?>

<div class="site-contacto">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php  if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            <br><br>
            Muito obrigado pelo seu contacto. Entraremos em contacto consigo o mais breve possivél.
        </div>

        <p>
            O email onde vai parar a menssgem é knowtech2020grupo10@gmail.com e a passe de acesso é Knowtech2020@.

            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                                                                                    Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <br>
        <p style="padding-left: 75px">
            Preencha por favor o formulário e entraremos em contacto consigo brevemente.
        </p>
        <div class="row" style="padding-left: 170px">
            <div class="col-lg-8">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'texto')->textarea(['rows' => 6]) ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>


                <div class="form-group text-right" style="padding-right: ">
                    <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>

