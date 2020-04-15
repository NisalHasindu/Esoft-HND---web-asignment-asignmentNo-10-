$(document).ready(function(){
    $('main').html('<div class="loding"><img src="img/unnamed.gif" alt="loding"></div>');
    $('main').load('contant_admin.php .bookDetails');
    var bookDetailsMenu = document.getElementById('mnuBookDetails');
    bookDetailsMenu.classList.add('manueActive');
});
function goToBookDetails(){
    $('main').html('<div class="loding"><img src="img/unnamed.gif" alt="loding"></div>');
    $('main').load('contant_admin.php .bookDetails');

    var activeMenu = document.getElementsByClassName('manueActive')[0];
    activeMenu.classList.remove('manueActive');
    var bookDetailsMenu = document.getElementById('mnuBookDetails');
    bookDetailsMenu.classList.add('manueActive');
}