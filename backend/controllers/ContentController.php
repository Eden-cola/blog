<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\Content;

/**
 * Index controller
 */
class ContentController extends BaseController
{
    public function actionIndex()
    {
        $data = Content::find()->where(['class_id'=>11])->all();
        return $this->render('index', [
            'data' => $data,
        ]);
    }

    public function actionAdd()
    {
        $model = new Content();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['content/']);
        } else {
            return $this->render('add', [
                'model' => $model,
            ]);
        }
    }

    public function actionEdit($id)
    {
        if(!$model = Content::findOne($id)){
            \Yii::$app->session->setFlash('warning', '未找到对应文章');
            return $this->redirect(['content/']);
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['content/']);
        } else {
            return $this->render('edit', [
                'model' => $model,
            ]);
        }
    }

    public function actionDel($id)
    {
        if(!$model = Content::findOne($id)){
            \Yii::$app->session->setFlash('warning', '未找到对应文章');
            return $this->redirect(['content/']);
        }
        if ($model->delete()) {
            \Yii::$app->session->setFlash('success', '删除成功');
        } else {
            \Yii::$app->session->setFlash('error', '删除失败');
        }
            return $this->redirect(['content/']);
    }
}
