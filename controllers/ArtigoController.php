<?php

namespace app\controllers;

use Yii;
use app\models\Artigo;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ArtigoController implements the CRUD actions for Artigo model.
 */
class ArtigoController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Artigo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dt_artigos = new ActiveDataProvider([

            'query' => Artigo::find()->orderBy ('update_at DESC'),
            'pagination'=>[
                'pageSize'=> 16
            ]
        ]);

        return $this->render('index', [
            'dt_artigos' => $dt_artigos,
        ]);
    }

    /**
     * Displays a single Artigo model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Artigo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionSubmeterartigo()
    {
        $model = new Artigo();

        if ($model->load(Yii::$app->request->post())) {

            $model->ficheiro =UploadedFile::getInstance($model, 'ficheiro');

            $ficheiro_name = $model->titulo.rand(1 , 40).'.'.$model->ficheiro;

            $ficheiro_path = 'uploads/'.$ficheiro_name;

            $model-> ficheiro->saveAs($ficheiro_path);

            $model->ficheiro= $ficheiro_path;

            $model->save();
            return $this->redirect(['view', 'id' => $model->idartigo, 'slug' =>$model->slug]);
        } else{
            return $this->render('submeterartigo', [
                'model' => $model,
            ]);
        }

    }

    /**
     * Updates an existing Artigo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idartigo]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Artigo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Artigo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Artigo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Artigo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('A página solicitada não existe.');
    }
}
