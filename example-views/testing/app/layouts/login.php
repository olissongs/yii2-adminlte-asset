<?php
use yii\helpers\Html;

/** @var \yii\web\View $this */
/** @var string $content */

\olissongs\adminlte\web\AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="login-page">

<?php $this->beginBody() ?>

    <div class="login-box">
        <div class="login-logo">
            <?= Html::a('<b>Admin</b>LTE', Yii::$app->homeUrl); ?>
        </div>

        <?= \olissongs\adminlte\widgets\Alert::widget(); ?>
        
        <?= $content ?>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
