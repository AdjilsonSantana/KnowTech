<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KnowTech: tecnologias e informações</title>
    <meta name="keywords" content="Know,knowtech, tech, tecnologia, informação"/>
    <meta name="author" content="Adjilson Santana, Tacy Anita, Eliandro Rosário">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
<?php $this->beginBody() ?>
<div class="container rounded bg-white border my-5">
    <div class="header">
        <div class="my-3 navbar-expand-lg" >
            <?php
            NavBar::begin([
                'brandLabel' => '<H1 class=" my-n2 border rounded border-white bg-white-blue font-weight-bold font-Arial"  style="padding: 0px 2px 1px;font-size: 20px">KN </H1>',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'rounded navbar navbar-nav navbar-dark bg-dark ',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'mx-n3 navbar navbar-nav '],
                'items' => [
                    ['label' => 'Knowtech', 'url' => ['/site/index'],
                        'options' => ['class' => 'mx-n2'],
                        ],
                    ['label' => 'Artigos', 'url' => '/artigo/index',
                        'options' => ['class' => 'mx-n2'],
                    ],
                    ['label' => 'Submeter Artigos', 'url' => ['/artigo/submeterartigo'],
                        'options' => ['class' => 'mx-n2'],
                        ],
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar navbar-nav ml-auto mx-n3 '],
                'items' => [
                    ['label' => 'Login', 'url' => ['/user/login'],
                        'options' => ['class' => 'mx-n3'],
                        'visible' => Yii::$app->user->isGuest ],
                    ['label' => 'Registar', 'url' => ['/user/register'],
                        'options' => ['class' => 'mx-n1'],
                        'visible' => Yii::$app->user->isGuest ],
                    ['label' => 'Olá ' . Yii::$app->user->displayName , 'url' => '#', 'visible' => !Yii::$app->user->isGuest ,
                        'options' => ['class' => 'mx-n2 navbara'],
                        'items' => [
                            ['label' => 'Editar Perfil', 'url' => ['/user/profile'],
                                'visible' => Yii::$app->user->can('rev'). Yii::$app->user->can('utili'). Yii::$app->user->can('admin')
                            ],
                            ['label' => 'Utilizadores', 'url' => ['/user/admin'], 'visible' => Yii::$app->user->can('admin')],
                            ['label' => 'Gerir funções', 'url' => ['/role/index'], 'visible' => Yii::$app->user->can('admin')],
                            ['label' => 'Gerir categorias', 'url' => ['/categoria'], 'visible' => Yii::$app->user->can('admin')],
                            ['label' => 'Gerir Artigos', 'url' => ['/artigo/index'], 'visible' => Yii::$app->user->can('admin')],
                            ['label' => 'Artigos publicados', 'url' => ['/artigo/index'], 'visible' => Yii::$app->user->can('utili')],
                            ['label' => 'Gerir Artigos', 'url' => ['/artigo/index'], 'visible' => Yii::$app->user->can('rev')],


                            ['label' => 'Sair',
                                'url' => ['/user/logout'],
                                'linkOptions' => ['data-method' => 'post']],
                        ],

                    ],

                ],
            ]);

            NavBar::end();
            ?>
        </div>
    </div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'options' => [
                'class' => 'breadcrumb',
            ],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
    <footer >
        <div class="footer border rounded my-3" >
            <div class="col navbar my-n4 ">
                <?php
                echo Nav::widget([
                    'options' => ['class' => 'rounded navbar navbar-left mx-n3'],
                    'items' => [
                        ['label' => 'Nossa página', 'url' => ['/site/about']],
                        ['label' => 'Contacto', 'url' => ['/site/contact'],
                            'options' => ['class' => 'rounded navbar mx-n4'],
                        ],
                    ],
                ]);
                ?>

                <div class="col-5 text-right ml-auto  mx-n4" style="padding-right: 20px; padding-top: 65px">
                    <ul class=" list-inline my-n5 " style="display:flex; justify-content:flex-end;">
                        <a class="btn-floating btn-sm mx-2" href="https://pt-pt.facebook.com/" target="_blank">
                            <i class="icones fab fa-facebook-f" style="color:darkblue"></i>
                        </a>
                        <a class="btn-floating btn-sm mx-2" href="https://twitter.com/login?lang=pt" target="_blank">
                            <i class="fab fa-twitter" style="color:deepskyblue"></i>
                        </a>

                        <a class="btn-floating btn-sm mx-2" href="https://www.instagram.com/?hl=pt" target="_blank">
                            <i class="fab fa-instagram" style="color:orangered"></i>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

