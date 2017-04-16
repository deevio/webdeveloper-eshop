console.log('main');

var bs = 0;

function progressBar(){   
    /* 
    var date = new Date();
    var s = date.getSeconds();
    var p = document.getElementById('bar');
    p.style.width = s + '%';
    */

    var p = document.getElementById('bar');
    p.style.width = bs + '%';

    console.log(bs + '%');
   

    if(bs >= 100) {
        bs = 0;
    }

    bs++;

};



//setInterval(progressBar,100);