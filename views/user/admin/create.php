<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var user\models\User $user
 * @var user\models\Profile $profile
 */

$this->title = Yii::t('user', 'Criar {modelClass}', [
  'modelClass' => 'utilizador',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('user', 'Utilizadores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'user' => $user,
        'profile' => $profile,
    ]) ?>

</div>