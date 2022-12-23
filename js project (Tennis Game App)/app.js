let player1name = document.getElementById("player1-name");
let player2name = document.getElementById("player2-name");
let player1point = document.getElementById("player1-point");
let player2point = document.getElementById("player2-point");
let player1button = document.getElementById("player1-button");
let player2button = document.getElementById("player2-button");
let winName = document.getElementById("winer-name");
let player1scouer = 0;
let player2scouer = 0;
let gameover = 5;

player1button.addEventListener("click",function(){

    point(1)

    if ( player1scouer >= gameover) {
        endgame ()
    }

    if (player2scouer > 0) {
        lessPoint(1)
    }
})

player2button.addEventListener("click",function(){

    point(2)

    if ( player2scouer >= gameover) {
        endgame ()
    }

    if (player1scouer > 0) {
        lessPoint(2)
    }
})



function point (po) {
    if(po==1){
        player1point.textContent = ++player1scouer
    }else {
        player2point.textContent = ++player2scouer
    }
}

function lessPoint(params) {
    if (params == 1){
        player2point.textContent = --player2scouer
    }else{
        player1point.textContent = --player1scouer
    }
}

function endgame (){
    if (player1scouer > player2scouer) {
        winName.textContent = "the winer is ibraheem"
    }else{
        winName.textContent = "the winer is islam"
    }
    document.getElementById("winer").style.display = "block";
    player1button.disabled = true;
    player2button.disabled = true;
    document.body.style.backgroundColor = "red"
    document.getElementById("winer").style.backgroundColor = "yellow"
    
}







document.getElementById("rest").addEventListener("click", function () {
    location.reload()
})