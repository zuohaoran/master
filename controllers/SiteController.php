<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $query = new \yii\db\Query();
        $list = $query->select("*")->from("nbos_ddos")->all();
        $pages = new Pagination(['totalCount' =>$list->count(), 'pageSize' => '10']);
        $model = $list->offset($pages->offset)->limit($pages->limit)->all();
        if(isset($_GET['lang']) )
        {
            return $this->render("index",['list' => $list,'model' => $model,
                'pages' => $pages]);
        }

    }
}
