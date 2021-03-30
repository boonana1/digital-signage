<?php

/* @var $this yii\web\View */
/* @var $model app\models\Channels */
/* @var $form ActiveForm */
/* @var $model app\models\Playlists */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\Pjax;

$csrf_param = Yii::$app->request->csrfParam;
$csrf_token = Yii::$app->request->csrfToken;
$this->title = 'Плеер | Система управления медиаэкранами';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--
 Плеер
 -->
<div class="playerBody" >
    <div class="<?php switch (\app\models\Settings::findOne(1)->ftheme){
        case 0:
            echo '';
            break;

        case 1:
            echo 'light';
            break;
    }?>  acrylic thick player">
        <?php
        switch ($media->template) {
            case 1:
                if ($media->alert != NULL){
            echo "<div class=\"row alertBlock shadow\">
            <marquee class=\"alert alert-danger\" id=\"text0\" width=\"100%\" behavior=\"scroll\" loop=\"infinite\" direction=\"left\" scrolldelay=\"10\" scrollamount=\"33\">
                 $media->alert
            </marquee>
        </div>";
        }
        echo "
        <div class=\"row\" style=\"flex-grow: 3;\">
            <div class=\"col-lg-8 videoBlock shadow\" style=\"padding: 0;\">";


                $pl = $media->media;
                $ext = end(explode('.', $pl));
                if ($ext == 'mp4' || $ext == 'avi'){

                   echo  "<video class=\"align-self-center\" loop controls autoplay tabindex=\"-1\"><source src=\"$pl\"></video>";

                } elseif($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif') {
                    echo "<img src=\"$pl\" style=\"width:100%;height:90vh;object-fit:cover;\">";
                } else{
                    echo "<iframe width=\"100%\" height=\"100%\" class=\"align-self-center\" src=\"$pl\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
                };

                echo "
            </div>
            <div class=\"col-lg widgets\" style=\"\">
                <div class=\"row\" tabindex=\"-1\">
                        <!--  Weather informer by meteoservice.ru -->";
                          switch (\app\models\Settings::findOne(1)->ftheme){
                            case 0:
                                echo '
                                        <a id="ms-informer-link-941469ae350e06616bc957302d11ec48" class="ms-informer-link" href="https://www.meteoservice.ru/weather/overview/perm">
                                            Погода в Перми
                                </a >
                                        <script class="ms-informer-script" src = "https://www.meteoservice.ru/informer/script/941469ae350e06616bc957302d11ec48" ></script >
                                ';
                                break;

                            case 1:
                                echo '
                                <a id="ms-informer-link-d3dcf911c0299d9a0dc787de517e8bb0" class="ms-informer-link" href="https://www.meteoservice.ru/weather/overview/perm">
                                Погода в Перми
                                </a >
                                <script class="ms-informer-script" src = "https://www.meteoservice.ru/informer/script/d3dcf911c0299d9a0dc787de517e8bb0" ></script >
                                ';
                                break;
                        };
                          echo "
                </div>
                <div class=\"alert alert-secondary\" style=\"height: 1px;width: 100%;margin: 0;padding: 0;\"></div>

                <div >
                    <div class=\"row\">
                        <p style=\"\">Время в Перми</p>
                    </div>
                    <div class=\"row\">
                        <span id=\"time\">Дата и время</span>
                    </div>
                </div>

            </div>
        </div>";
                break;

            case 2:
                echo "
<div class=\"row\" style=\"flex-grow: 3;\">

<div class=\"col-lg widgets\" style=\"\">
<div class=\"row\" tabindex=\"-1\">
    <!--  Weather informer by meteoservice.ru -->";
                          switch (\app\models\Settings::findOne(1)->ftheme){
                            case 0:
                                echo '
                                        <a id="ms-informer-link-941469ae350e06616bc957302d11ec48" class="ms-informer-link" href="https://www.meteoservice.ru/weather/overview/perm">
                                            Погода в Перми
                                </a >
                                        <script class="ms-informer-script" src = "https://www.meteoservice.ru/informer/script/941469ae350e06616bc957302d11ec48" ></script >
                                ';
                                break;

                            case 1:
                                echo '
                                <a id="ms-informer-link-d3dcf911c0299d9a0dc787de517e8bb0" class="ms-informer-link" href="https://www.meteoservice.ru/weather/overview/perm">
                                Погода в Перми
                                </a >
                                <script class="ms-informer-script" src = "https://www.meteoservice.ru/informer/script/d3dcf911c0299d9a0dc787de517e8bb0" ></script >
                                ';
                                break;
                        };
                          echo "
</div>
<div class=\"alert alert-secondary\" style=\"height: 1px;width: 100%;margin: 0;padding: 0;\"></div>

                <div >
                    <div class=\"row\">
                        <p style=\"\">Время в Перми</p>
                    </div>
                    <div class=\"row\">
                        <span id=\"time\">Дата и время</span>
                    </div>
                </div>
</div>

<div class=\"col-lg-8 videoBlock shadow\" style=\"padding: 0;\">";


                $pl = $media->media;
                $ext = end(explode('.', $pl));
                if ($ext == 'mp4' || $ext == 'avi'){

                    echo  "<video class=\"align-self-center\" loop controls autoplay tabindex=\"-1\"><source src=\"$pl\"></video>";

                } elseif($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif') {
                    echo "<img src=\"$pl\" style=\"width:100%;height:90vh;object-fit:cover;\">";
                } else{
                    echo "<iframe width=\"100%\" height=\"100%\" class=\"align-self-center\" src=\"$pl\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
                };

                echo "
</div>
</div>";
                if ($media->alert != NULL){
                    echo "<div class=\"row alertBlock shadow\">
<marquee class=\"alert alert-danger\" id=\"text0\" width=\"100%\" behavior=\"scroll\" loop=\"infinite\" direction=\"left\" scrolldelay=\"10\" scrollamount=\"33\">
$media->alert
</marquee>
</div>";
                };
                break;

            case 3:
               echo "
        <div class=\"row\" style=\"flex-grow: 3;\">
            <div class=\"col-lg-8 videoBlock shadow\" style=\"padding: 0;\">";


                $pl = $media->media;
                $ext = end(explode('.', $pl));
                if ($ext == 'mp4' || $ext == 'avi'){

                    echo  "<video class=\"align-self-center\" loop controls autoplay tabindex=\"-1\"><source src=\"$pl\"></video>";

                } elseif($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif') {
                    echo "<img src=\"$pl\" style=\"width:100%;height:90vh;object-fit:cover;\">";
                } else{
                    echo "<iframe width=\"100%\" height=\"100%\" class=\"align-self-center\" src=\"$pl\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
                };

                echo "
            </div>
            <div class=\"col-lg widgets\" style=\"\">
                <div class=\"row\" tabindex=\"-1\">
                    <!--  Weather informer by meteoservice.ru -->";
                          switch (\app\models\Settings::findOne(1)->ftheme){
                            case 0:
                                echo '
                                        <a id="ms-informer-link-941469ae350e06616bc957302d11ec48" class="ms-informer-link" href="https://www.meteoservice.ru/weather/overview/perm">
                                            Погода в Перми
                                </a >
                                        <script class="ms-informer-script" src = "https://www.meteoservice.ru/informer/script/941469ae350e06616bc957302d11ec48" ></script >
                                ';
                                break;

                            case 1:
                                echo '
                                <a id="ms-informer-link-d3dcf911c0299d9a0dc787de517e8bb0" class="ms-informer-link" href="https://www.meteoservice.ru/weather/overview/perm">
                                Погода в Перми
                                </a >
                                <script class="ms-informer-script" src = "https://www.meteoservice.ru/informer/script/d3dcf911c0299d9a0dc787de517e8bb0" ></script >
                                ';
                                break;
                        };
                          echo "
                </div>
                <div class=\"alert alert-secondary\" style=\"height: 1px;width: 100%;margin: 0;padding: 0;\"></div>

                <div >
                    <div class=\"row\">
                        <p style=\"\">Время в Перми</p>
                    </div>
                    <div class=\"row\">
                        <span id=\"time\">Дата и время</span>
                    </div>
                </div>
            </div>
        </div>";
                if ($media->alert != NULL){
                    echo "<div class=\"row alertBlock shadow\">
            <marquee class=\"alert alert-danger\" id=\"text0\" width=\"100%\" behavior=\"scroll\" loop=\"infinite\" direction=\"left\" scrolldelay=\"10\" scrollamount=\"33\">
                 $media->alert
            </marquee>
        </div>";
                }
                break;
        } ?>

        <form>
            <a class="btn btn-danger btn-link" style="position: absolute; right: 5px; bottom: 5px;" href="<?= Url::to(['/player-auth']); ?>" tabindex="1">
                <i class="material-icons">close</i>
            </a>
        </form>
    </div>
</div>


<script>
    let playlist = <?= $media->id ?>,
        media = '<?= $media->media ?>',
        alert = '<?= $media->alert ?>',
        template = '<?= $media->template ?>';
    function WaitForMsg()
    {
        $.ajax({
            type: 'post',
            url: '/player',
            async: true,
            data: {
                '<?= $csrf_param?>' : '<?=$csrf_token?>',
                'Channel' : '<?= $channel ?>',
            },
            success: function(data){
                <?php //json_encode($_POST['Channels']) ?>
                let updated = eval(data);
                let updatedPlaylist = updated.id;
                let updatedMedia = updated.media;
                let updatedAlert = updated.alert;
                let updatedTemplate = updated.template;

                if (updatedPlaylist != playlist || updatedMedia != media || updatedAlert != alert || updatedTemplate != template) {
                    //console.log(updatedPlaylist);
                    window.location.reload();
                }

                setTimeout('WaitForMsg()',1000);

            },
            error: function(XMLHttpRequest, textStatus, errorThrown){

                console.log("Error: " + textStatus + "(" + errorThrown +") : " + XMLHttpRequest);

                setTimeout('WaitForMsg()',10000);
            }

        });
    }

    $(document).ready(function(){

        if (window.location.href == "https://md.loc/player" || window.location.href == "https://192.168.100.10/player" || window.location.href == "https://xn--80ahcnr.xn----gtbcflhfcayeg6b.xn--p1ai/player"){
            WaitForMsg();
        }

        //setInterval(function () {window.location.reload();}, 60 * 60 * 1000);

    });
</script>




