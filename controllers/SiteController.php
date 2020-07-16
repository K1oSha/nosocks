<?php

//Контроллер связвает модель с представлением
namespace app\controllers;

use yii;
use yii\web\Response;
use app\models\Order;
use app\models\OrderSearch;
use yii\web\Controller;
use app\models\Articles;
use yii\data\ActiveDataProvider;

class SiteController extends Controller
{
    public function actionIndex() //определяем нашу функцию actionIndex
    {
        $searchModel = new OrderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionData($str = null)
    {
        if ($str == null) return -1;
        $data = explode('.',$str);
        $order = new Order();
        $order->pol = $data[0];
        $order->feetsize = $data[1];
        $order->samesocks = $data[2];
        $order->chosensocks = $data[3];
        $order->answers = $data[4];
        $order->date = $data[5];
        $order->text = $data[6];
        $order->time = time();
        if ($order->save())
        {
            return 1;
        }
        else
        {
            return -1;
        }
        
        
    }

    // public function behaviors() //вывод JSON по умолчанию
    // {
    //     $behaviors = parent::behaviors();
    //     $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON; //переопределение вывода text/html на JSON
    //     return $behaviors;
    // }

  
}