var i = 100;

var counterBack = setInterval(function () {
    i--;
    if (i > 0) {
        $('.progress-bar').css('width', i + '%');
    }
    else {
        clearInterval(counterBack);
        $('.alert').alert('close');
    }
}, 70);

