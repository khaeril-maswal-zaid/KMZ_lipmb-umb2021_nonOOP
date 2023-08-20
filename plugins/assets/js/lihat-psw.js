var lihat = document.getElementById('lihat');
var sembunyi = document.getElementById('sembunyi');
var psw = document.getElementById('inputPassword');

lihat.addEventListener('click', function(){
    psw.removeAttribute('type');
    psw.setAttribute('type', 'text');

    sembunyi.style.display = "inline";
    lihat.style.display = "none";
});

sembunyi.addEventListener('click', function(){
    psw.removeAttribute('type');
    psw.setAttribute('type', 'password');

    lihat.style.display = "inline";
    sembunyi.style.display = "none";
});


var lihat2 = document.getElementById('lihat2');
var sembunyi2 = document.getElementById('sembunyi2');
var psw2 = document.getElementById('inputPassword2');

lihat2.addEventListener('click', function(){
    psw2.removeAttribute('type');
    psw2.setAttribute('type', 'text');

    sembunyi2.style.display = "inline";
    lihat2.style.display = "none";
});

sembunyi2.addEventListener('click', function(){
    psw2.removeAttribute('type');
    psw2.setAttribute('type', 'password');

    lihat2.style.display = "inline";
    sembunyi2.style.display = "none";
});


