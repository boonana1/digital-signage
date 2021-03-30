<?php

/* @var $this \yii\web\View */
/* @var $model app\models\Channels */
/* @var $form ActiveForm */
/* @var $model app\models\Playlists */
/* @var $model app\models\LoginForm */
/* @var $content string */


use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;

?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
    <base href="/web/"/>
    <meta charset="<?php Yii::$app->charset; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->title ?></title>
    <link rel="icon" href="./img/icon.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Fluent Design Bootstrap -->
    <link rel="stylesheet" href="./css/fluent.css">
    <!-- Micon icons-->
    <link rel="stylesheet" href="./css/micon.min.css">
    <!--Custom style -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- JQuery -->
    <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
</head>
<body style="background: url('<?php echo \app\models\Settings::findOne(1)->fbackground; ?>') center no-repeat;background-size: cover;">
<?php $this->beginBody(); ?>

<?= $content ?>

    <!-- Scripts -->

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <!-- Fluent design script -->
    <script src="./js/fluent.js"></script>
    <!-- Custom script -->
    <script src="./main.js"></script>
<script>
    $(function() {
        let startPlayer = $('.startPlayer'),
            player = $('.playerBody'),
            startLogin = $('.startLogin');

            startLogin.fadeIn();

            player.fadeIn();

    })
</script>




    <?php $this->endBody(); ?>

<script>
    $(function() {

        $('[data-toggle="popover"]').popover();

    })
</script>
</body>
</html>
<?php $this->endPage(); ?>