
// Óra
var napok =["vasárnap", "hétfő","kedd","szerda","csütörtök","péntek","szombat"];

function ido() {
    var Time=new Date();
    var ora=Time.getHours();
    var perc=Time.getMinutes();
    var masodperc=Time.getSeconds();
    var napnev=napok[Time.getDay()];

    document.getElementById('orahelye').innerHTML=ora+":"+((perc<10)?0:"")+perc+":"+((masodperc<10)?0:"")+masodperc+" "+napnev;
}

setInterval(ido,1000);