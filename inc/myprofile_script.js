function backToHome(){
    $('main').html('<div class="loding"><img src="img/unnamed.gif" alt="loding"></div>');
    $('main').load('homePageContant.php #home');
}
    
