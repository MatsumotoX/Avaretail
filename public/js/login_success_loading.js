$(function() {
    var counting = 2;
    var ReloadPageInterval = setInterval(function(){
        counting -= 1;
        document.getElementById('counting').innerHTML = counting;
        if (counting == 0) {
            clearInterval(ReloadPageInterval);
            window.location.href = '/';
        }
    }, 1000);
});