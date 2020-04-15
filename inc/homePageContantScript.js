$(document).ready(function(){
    $('main').html('<div class="loding"><img src="img/unnamed.gif" alt="loding"></div>');
    $('main').load('homePageContant.php #home');
    $('#userName').click(function(){
        $('main').html('<div class="loding"><img src="img/unnamed.gif" alt="loding"></div>');
        $('main').load('homePageContant.php #myProfile');
    });
});
