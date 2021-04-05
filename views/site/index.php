<?php

use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dt_artigo yii\data\ActiveDataProvider */

$this->title = 'KnowTech: tecnologias e informações';

 ?>
<!--primeira linha-->
<div class="row my-n1">
    <div id="carouselExampleControls" class="carousel slide border rounded" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item ">
                    <a href="https://www.noticiasaominuto.com/tech/1475998/o-novo-galaxy-fold-pode-ser-mais-barato-do-que-esta-a-espera" target="_blank"><img class="d-block img-fluid rounded" src="../../img/galaxyfold.jpg" alt="Primeiro Slide"></a>
                <div class="carousel-caption d-none d-lg-block">
                    <a  href="https://www.noticiasaominuto.com/tech/1475998/o-novo-galaxy-fold-pode-ser-mais-barato-do-que-esta-a-espera">Galaxy Fold</a>
                    <p>Samsung e Xiaomi dominam top dos smartphones Android mais vendidos no primeiro trimestre</p>
                </div>
            </div>
            <div class="carousel-item ">
                    <a href="https://melhorqueunico.sabado.pt/chegaram-os-novos-carros-voadores/"><img class=" img-fluid rounded" src="../../img/dirt5.jpg" alt="Segundo  Slide"></a>
                <div class="carousel-caption d-none d-lg-block">
                    <a href="/site/viewa">Carros voadores</a>
                    <p>Chegaram os novos carros voadores</p>
                </div>
            </div>
            <div class="carousel-item active">
                    <a ><img class="d-block img-fluid rounded" src="../../img/ubuntu-point-release.jpg" alt="Terceiro Slide"></a>
                <div class="carousel-caption d-none d-lg-block">
                    <a href="/site/viewb">Linux</a>
                    <p>Aprenda a instalar o Guest Additions do Virtualbox no Ubuntu 20.04 LTS</p>
                </div>
            </div>
            <div class="carousel-item">
                <a><img class="d-block img-fluid rounded" src="../../img/zoom.jpg" alt="Quarto Slide"></a>
                <div class="carousel-caption d-none d-lg-block">
                    <a  href="/site/viewc">Zoom</a>
                    <p>Zoom lançou atualização com primeiras medidas de segurança</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon  rounded " aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon  rounded" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
</div>

<!--Segundo bloco-->

<div class="row my-4 mx-n4">
    <div class="col-sm-6 col-md-3 mb-1">
        <div class="card">
            <div class="card-body text-center">
                <a href="https://pplware.sapo.pt/microsoft/windows/e-assim-que-o-windows-10-se-vai-proteger-contra-a-instalacao-de-apps-nao-desejadas/"><h4 class="card-title">Windows 10</h4></a>
                <p class="card-text">É assim que o Windows 10 se vai proteger contra a instalação de apps não desejadas</p>
                <a href="https://pplware.sapo.pt/microsoft/windows/e-assim-que-o-windows-10-se-vai-proteger-contra-a-instalacao-de-apps-nao-desejadas/">Continuar a ler!</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 mb-1">
        <div class="card">
            <div class="card-body text-center">
                <a href="https://pplware.sapo.pt/microsoft/windows/e-assim-que-o-windows-10-se-vai-proteger-contra-a-instalacao-de-apps-nao-desejadas/"><h4 class="card-title">Apple</h4></a>
                <p class="card-text">Afinal o que se passa? Apple está a reenviar atualizações das apps para o iOS</p>
                <a href="https://pplware.sapo.pt/microsoft/windows/e-assim-que-o-windows-10-se-vai-proteger-contra-a-instalacao-de-apps-nao-desejadas/">Continuar a ler!</a>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3 mb-1">
        <div class="card">
            <div class="card-body text-center">
                <a href="https://pplware.sapo.pt/category/motores/?utm_source=Pplware&utm_medium=menu_topo&utm_campaign=motores"><h4 class="card-title">Tesla</h4></a>
                <p class="card-text">Tesla Cybertruck: Elon Musk descarta plano para reduzir tamanho da pickup elétrica</p>
                <a href="">Continuar a ler!</a>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3 mb-1">
        <div class="card">
            <div class="card-body text-center">
                <a href="https://pplware.sapo.pt/microsoft/windows/e-assim-que-o-windows-10-se-vai-proteger-contra-a-instalacao-de-apps-nao-desejadas/"><h4 class="card-title">Antivírus</h4></a>
                <p class="card-text">Como comprar um antivírus, um Office ou um Windows com preços competitivos?</p>
                <a href="https://pplware.sapo.pt/microsoft/windows/e-assim-que-o-windows-10-se-vai-proteger-contra-a-instalacao-de-apps-nao-desejadas/">Continuar a ler!</a>
            </div>
        </div>
    </div>
</div>

<!--segundo bloco imagens -->

    <?= ListView::widget([
        'dataProvider' => $dt_artigo,
        'itemView'=>'_artigo',
        'itemOptions' => ['class' => 'col-sm-3 mb-4 px-2'],
        'layout'=> '<div class="container"><div class="row">{items}</div></div>',
    ]); ?>

<!--terceiro bloco-->


<div class="row mx-n4">
    <div class="col-sm">
        <div class="card border-primary" >
            <div class="card-header">Smartphones</div>
            <div class="card-body text-primary">
                <a href="https://www.noticiasaominuto.com/tech/1474891/smartphones-da-samsung-apresentaram-falha-de-seguranca-desde-2014"><h5 class="card-title">Smartphones da Samsung apresentaram falha de segurança desde 2014</h5></a>
               <p class="card-text">A Samsung terá lançado uma atualização para os seus smartphones que corrige uma vulnerabilidade existente desde 2014, conta o GizmoChina.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="border  rounded-circle">
            <div class="jumbotron jumbotron-fluid bg-light">
                <div class="container">
                    <h1 class="display-4">Carros e Tecnologia</h1>
                    <a href="https://olhardigital.com.br/carros-e-tecnologia/noticia/volvo-aposta-em-dispositivos-lidar-para-aprimorar-direcao-autonoma/100379"><h6 class="card-title">Volvo Aposta em Dispositivos LIDAR para Aprimorar Direção Autônoma</h6></a>
                    <p class="lead">Montadora sueca visa aprimorar recursos de assistência ao motorista e o desenvolvimento de um piloto automático completamente independente.</p>
                </div>
            </div>
        </div>
    </div>
</div>

