<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="<?php switch (\app\models\Settings::findOne(1)->ftheme){
    case 0:
        echo '';
        break;

    case 1:
        echo 'light';
        break;
}?> acrylic thick startLogin" style="display: none;">
        <div class="site-error">

            <h1><?= Html::encode($this->title) ?></h1>

            <div class="alert alert-danger">
                <?= nl2br(Html::encode($message)) ?>
            </div>

            <p>
                Вышеупомянутая ошибка произошла во время обработки веб-сервером вашего запроса.
                <!--The above error occurred while the Web server was processing your request.-->
            </p>
            <p>
                Пожалуйста, свяжитесь с нами, если вы считаете, что это ошибка сервера. Спасибо.
                <!--Please contact us if you think this is a server error. Thank you.-->
            </p>

        </div>
</div>

