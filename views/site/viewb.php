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
            <a><h3 class="text-center">Aprenda a instalar o Guest Additions do Virtualbox no Ubuntu 20.04 LTS</h3></a>
            <hr>
                <div>
                    <img class=" img-fluid rounded" src="../../img/ubuntu-point-release.jpg" style="height: 400px">
                </div>
            <br><br>
            <div class="justify-content-center">
                <p>Já ouviu falar em Guest Additions? Quem virtualiza uma distribuição Linux usando o Virtualbox facilmente se apercebe que nem tudo funciona da melhor maneira. Ou é a gráfica que não foi detetada, ou a definição do monitor não é a melhor, há dificuldade em interagir entre o sistema nativo e no sistema virtualizado, etc.</p>

                <p class="strong">Como instalar o Guest Additons no Ubuntu 20.04 LTS?</p>
                <p>A instalação do Guest Additons no Ubuntu 20.04 LTS é relativamente simples. Para começar devem instalas as dependências necessárias usando o seguinte comando:

                    sudo apt install linux-headers-$(uname -r) build-essential dkms

                    Aprenda a instalar o Guest Additions do Virtualbox no Ubuntu 20.04 LTS

                    Em seguida, no VirtualBox, devem ir a Devices > Insert Guest Additions CD Image

                    Aprenda a instalar o Guest Additions do Virtualbox no Ubuntu 20.04 LTS

                    Ao carregar a imagem dos Guest Additions aparecerá uma janela para iniciar o processo de instalação. Carreguem em Run.

                    Aprenda a instalar o Guest Additions do Virtualbox no Ubuntu 20.04 LTS

                    Durante alguns minutos os novos módulos irão ser instalados e carregados no sistema.</p>
            </div>

            <hr>
        </div>
    </div>

</div>
