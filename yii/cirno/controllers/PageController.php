<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Categories;

/*Контроллер для сайта*/
class PageController extends Controller
{

    /*
товары
     */
    public function actionListproduct()
    {
        if(isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT))
        {

            $categories = Categories::find()->where(['id' => $_GET['id']])->asArray()->one();

            if(count($categories) > 0)
                return $this->render('listproducts', compact('categories'));
        }
        return $this->redirect(['page/catalog']);
    }

    /*
каталог
     */
    public function actionCatalog()
    {
        $categories = Categories::find()->asArray()->all();
        return $this->render('catalog', compact('categories'));
    }

/*
новости
*/

    public function actionNews()
    {
        return $this->render('news');
    }

/*
контакты
*/

    public function actionContacts()
    {
        return $this->render('contacts');
    }

/*
login
*/

    public function actionLogin()
    {
        return $this->render('login');
    }
}
