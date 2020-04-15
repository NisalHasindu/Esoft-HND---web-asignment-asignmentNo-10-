function goToUserDetails(){
    $('main').html('<div class="loding"><img src="img/unnamed.gif" alt="loding"></div>');
    $('main').load('contant_admin.php .userDetails');

    var activeMenu = document.getElementsByClassName('manueActive')[0];
    activeMenu.classList.remove('manueActive');
    var bookDetailsMenu = document.getElementById('mnuUserDetails');
    bookDetailsMenu.classList.add('manueActive');
}