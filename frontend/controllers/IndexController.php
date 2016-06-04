<?php
namespace frontend\controllers;

use Yii;

/**
 * Site controller
 */
class IndexController extends BaseController
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return mixed
     */
    public function actionCategory($id)
    {
        return $this->render('category');
    }

    /**
     * @return mixed
     */
    public function actionContent($id)
    {
        return $this->render('content');
    }
}
