<?php

use app\models\Order;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = "NOSOCKS";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nosocks-index">
<p> 123 </p>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(['id'=>'pjax-container']); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => "null"],
        'summary' =>$string,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pol',
            'feetsize',
            'samesocks',
            'chosensocks',
            'answers',
            'date',
            'text',
            'time'
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
