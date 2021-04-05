<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dt_artigos yii\data\ActiveDataProvider */

$this->title = 'Artigos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class=" artigo-index">

    <br>

    <?= ListView::widget([
        'dataProvider' => $dt_artigos,
        'itemView'=>'_artigos',
        'itemOptions' => ['class' => 'col-sm-3 mb-4 px-2'],
        'layout'=> '<div class="container"><div class="row">{items}</div></div> <br>{pager}<br>',
    ]); ?>

</div>
