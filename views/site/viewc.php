<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Artigo */


$this->params['breadcrumbs'][] = ['label' => 'Artigos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Chegaram os novos carros voadores'];

\yii\web\YiiAsset::register($this);
?>

<div class="artigo-view">
    <div class="row">
        <div class="col-md-10  offset-1">
            <br>
            <a><h3 class="text-center">Zoom lançou atualização com primeiras medidas de segurança</h3></a>
            <hr>
                <div>
                    <img class=" img-fluid rounded" src="../../img/zoom.jpg" style="height: 400px">
                </div>
            <br><br>    
            <div class="justify-content-center">
                <p>A empresa está a ser fiel ao compromisso de melhorar a segurança.</p>

                <p class="strong">iel ao compromisso de eliminar as vulnerabilidades de segurança do seu serviço de videconferência, a Zoom lançou hoje aquilo que designa como atualização 5.0.</p>
                <p>Estão presentes uma série de correções de segurança como a capacidade de bloquear conversas para impedir que entre alguém, remover participantes e limitar a partilha de ecrãs assim como conversas nas reuniões.

                    A atualização surge depois de um período de fortes críticas à Zoom a propósito das vulnerabilidades de segurança, o que levou o CEO da empresa, Eric Yuan, a decretar a suspensão de novas funcionalidades em favor de um foco na segurança.
                </p>
            </div>

            <hr>
        </div>
    </div>

</div>
