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
            <a><h3 class="text-center">Chegaram os novos carros voadores</h3></a>
            <hr>
                <div>
                    <img class=" img-fluid rounded" src="../../img/dirt5.jpg" style="height: 400px">
                </div>
            <br><br>
            <div class="justify-content-center">
                <p>Há anos que a ideia existe em livros e filmes de ficção científica, mas 2020 promete ser o ano em que os carros vão finalmente levantar voo. De verdade</p>

                <p>Na última edição da CES – maior feira mundial de tecnologia, em Las Vegas –, a Hyundai apresentou o S-A1 Air, protótipo de um carro voador em parceria com a Uber. Há muito que a gigante americana do transporte tinha prometido uma frota de veículos voadores – pilotados num primeiro momento e totalmente autónomos no futuro, e agora tornou-se evidente que a Hyundai foi a empresa escolhida para entregar essa frota. Mas o S-A1 ainda não estará à venda em 2020, vai apenas iniciar testes de voo, para que no próximo ano, ou no seguinte, se possa tornar uma realidade.<br>

                    Quem já voa é a alemã Volocopter, que tem uma frota de táxis montada e prestes a entrar ao serviço em Singapura. E como as autoridades de Helsínquia também já aprovaram as licenças, em breve chegará à Europa. Segue-se a Alemanha, até porque uma das parceiras é a casa-mãe da Mercedes, a Daimler (a outra são os chineses da Geely, donos da Volvo). O veículo não será ainda totalmente livre, no sentido em que não descola ou aterra de onde quiser, mas de pontos fixos, chamados de Veloportos. E também é inegável que se parece mais com um helicóptero estranho do que com um automóvel, mas assim serão os carros do futuro: a partir do momento em que descolam, os conceitos misturam-se. </p>
            </div>

            <hr>
        </div>
    </div>

</div>
