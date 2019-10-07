var num=1;
function nextpic(){
    if(num>=6){
        num=1;
    }
    else num++;
    document["njszkpic"].src="img/portfolio/p3."+num+".png";
}
function prevpic(){
    if(num<=1){
        num=6;
    }
    else num--;
    document["njszkpic"].src="img/portfolio/p3."+num+".png";
}
