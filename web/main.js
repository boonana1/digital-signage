$(function() {
    let title = $('.startTitle'),
    titleButton = $('.titleButton'),
    player = $('.playerBody')
    startLogin = $('.startLogin'),
    startPlayer = $('.startPlayer'),
    startAdmin = $('.sadm'),
    login = $('.login'),
    backToAuthBtn = $('.login .back');

    //titleButton.click(() => {
       // title.fadeOut();
        //title.remove();
        //startLogin.fadeIn();
   // });
    //titleButton.keydown(() => {
        //title.fadeOut();
        //title.remove();
        //startLogin.fadeIn();
   // });

    startPlayer.click(() => {
        startLogin.fadeOut();
        startLogin.remove();
        player.fadeIn();
    });

    /*player.mousemove(function () { 
        $('.navbarLogin').fadeIn();
        setTimeout(function () { 
            $('.navbarLogin').fadeOut();
        }, 5000);
    });*/

    
    
    startAdmin.click(() => {
        startLogin.hide();
        login.fadeIn();

    });

    backToAuthBtn.click(() => {
        login.hide();
        startLogin.fadeIn();
    });

});

function clock() {
    let d = new Date(),
        hrs = d.getHours(),
        min = d.getMinutes(),
        sec = d.getSeconds();
    
    if (hrs <= 9) hrs="0" + hrs;
    if (min <=9 ) min="0" + min;
    if (sec <= 9) sec="0" + sec;
    
    $("#time").html(hrs + ":" + min + ":" + sec);
    }
    setInterval('clock()',1000);
