//view user profile details
var profileIcon = document.getElementById('profileIcon');
var profile = document.getElementById('divProfile');
var showProfile = false;

profileIcon.addEventListener('click',function(){
    if(showProfile == false){
        profile.classList.add('showProfile');
        profile.classList.remove('hideProfile');
        showProfile = true;
    }else if(showProfile == true){
        profile.classList.remove('showProfile');
        profile.classList.add('hideProfile');
        showProfile = false;
    }
    
});

