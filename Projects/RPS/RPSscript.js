var a = "Rock";
var b = "Paper";
var c = "Scissors";

function rockButtonClicked() {
  var player = a;
  var computer = Math.floor(Math.random() * 3 + 1);
  if (computer == 1) {
    eredmeny = a;
  } else if (computer == 2) {
    eredmeny = b;
  } else {
    eredmeny = c;
  }
  document.getElementById("control").innerHTML =
    "Player: " + player + " | " + "Computer: " + eredmeny;
  if (player == eredmeny) {
    document.getElementById("inner").innerHTML = "Draw!";
  } else if (eredmeny == b) {
    document.getElementById("inner").innerHTML = "Computer won!";
  } else {
    document.getElementById("inner").innerHTML = "You won!";
  }
}

function paperButtonClicked() {
  var player = b;
  var computer = Math.floor(Math.random() * 3 + 1);
  if (computer == 1) {
    eredmeny = a;
  } else if (computer == 2) {
    eredmeny = b;
  } else {
    eredmeny = c;
  }
  document.getElementById("control").innerHTML =
    "Player: " + player + " | " + "Computer: " + eredmeny;
  if (player == eredmeny) {
    document.getElementById("inner").innerHTML = "Draw!";
  } else if (eredmeny == c) {
    document.getElementById("inner").innerHTML = "Computer won!";
  } else {
    document.getElementById("inner").innerHTML = "You won!";
  }
}

function scissorsButtonClicked() {
  var player = c;
  var computer = Math.floor(Math.random() * 3 + 1);
  if (computer == 1) {
    eredmeny = a;
  } else if (computer == 2) {
    eredmeny = b;
  } else {
    eredmeny = c;
  }
   document.getElementById("control").innerHTML =
    "Player: " + player + " | " + "Computer: " + eredmeny;
  if (player == eredmeny) {
    document.getElementById("inner").innerHTML = "Draw!";
  } else if (eredmeny == a) {
    document.getElementById("inner").innerHTML = "Computer won!";
  } else {
    document.getElementById("inner").innerHTML = "You won!";
  }
}
