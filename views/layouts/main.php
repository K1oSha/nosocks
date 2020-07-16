<html>
<? use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

?>
<? $this->beginPage();?><!--  Тригер для бутстрапа -->

        <head>
            <?= Html::csrfMetaTags() ?>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Technics</title>
            <? $this->head();?><!--  Тригер для бутстрапа -->
        </head>

        <body>
        <? $this->beginBody();?><!--  Тригер для бутстрапа -->
        <?
           NavBar::begin([
                   'brandLabel'=>'NOSOCKS',
                    'brandUrl'=> Yii::$app->homeUrl,
                    'options'=>
                    [
                            'class' => 'navbar-default navbar-fixed-top'
                    ],
           ]);
            NavBar::end();
        ?>

        <div class="container" style="margin-top: 60px ">

        <?=$content?>

        </div>

        <? $this->endBody();?><!--  Тригер для бутстрапа -->
        </body>
<div class="footer" style="height: 10%; position: relative;">
</div>
</body>
</html>
<? $this->endPage();?><!--  Тригер для бутстрапа -->

