function szin(){
 var a = Math.floor(Math.random() * 255 + 1);
 var b = Math.floor(Math.random() * 255 + 1);
 var c = Math.floor(Math.random() * 255 + 1);
 return a+" "+b+" "+c;}

function hatterszin(){
  document.bgColor=szin();
}

var quotes = [
    "The essence of all art is to have pleasure in giving pleasure.",
    "Brevity is the soul of wit.",
    "Question everything generally thought to be obvious.",
    "Sharpen your rough edges and be the best possible version of your weird self.",
    "Instead of wondering when your next vacation is, maybe you should set up a life you don't need to escape from.",
    "Your actions speak so loudly, I can not hear what you are saying.",
    "You don’t have to prove anything to anybody, including yourself.",
    "In the end, we will remember not the words of our enemies, but the silence of our friends.",
    "A friend to all is a friend to none.",
    "The future belongs to those who prepare for it today.",
  "Be who you are and say what you feel, because those who mind don't matter, and those who matter don't mind.",
  "In three words I can sum up everything I've learned about life: it goes on.",
  ];

var authors = [
    "Dale Carnegie",
    "William Shakespeare",
    "Dieter Rams",
    "Colin Wright",
    "Seth Godin",
    "Ralph Waldo Emerson",
    "Mark Manson",
    "Martin Luther King Jr.",
    "Aristotle",
    "Malcolm X",
    "Bernard M. Baruch",
    "Robert Frost",
  ];

var used = []

function generate(){
  var i=Math.floor(Math.random()*quotes.length);
  if(used.includes(i)){
    generate();
  }
  else{
  document.getElementById("quote").innerHTML = quotes[i];
  document.getElementById("author").innerHTML = "- " +authors[i];
    if(used.length>used.length-1){used.pop()}
    used.push(i)
  }
  }


 $(document).ready(function() {

  $('#button2').click(function() {
    window.open('https://twitter.com/intent/tweet?text=' + $('#quote').text() + " " + $('#author').text());
  });

});