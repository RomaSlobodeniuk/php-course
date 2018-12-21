var timestamp = $.cookie("test_cookie");

setTimeout(function () {
    $('.alert').remove();
}, 3000);

if (timestamp !== undefined) {
    var allowedTime = 60;
    var text = $('.navbar-brand').text();
    setInterval(function () {
        var currTime = Math.floor(Date.now() / 1000);
        var timeToLogout = allowedTime - (currTime - timestamp);
        if (timeToLogout <= 0) {
            window.location.href = 'http://localhost/php_course/RomaSlobodeniuk/10_11_lesson_HTML/';
        }

        var  newText = text + ' - ' + timeToLogout;
        $('.navbar-brand').text(newText);
        console.log(newText);
    }, 100);
}


