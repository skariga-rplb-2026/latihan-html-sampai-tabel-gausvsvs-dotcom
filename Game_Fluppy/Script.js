// Board
let board;
let boardWidth = 360;
let boardHeight = 640;
let context;

// Bird
let birdWidth = 34;
let birdHeight = 24;
let birdX = boardWidth / 8;
let birdY = boardHeight / 2;
let birdImg;

let bird = {
    x: birdX,
    y: birdY,
    width: birdWidth,
    height: birdHeight
};

// Pipes
let pipeArray = [];
let pipeWidth = 64;
let pipeHeight = 512;
let pipeX = boardWidth;
let pipeY = 0;

let topPipeImg;
let bottomPipeImg;

// Physics
let velocityX = -2; // pipes
let velocityY = 0;  // bird
let gravity = 0.1;

let gameOver = false;
let score = 0;


window.onload = function () {
    board = document.getElementById("board");
    board.width = boardWidth;
    board.height = boardHeight;
    context = board.getContext("2d");

    // Load images
    birdImg = new Image();
    birdImg.src = "assets/images/flappybird.png";

    topPipeImg = new Image();
    topPipeImg.src = "assets/images/toppipe.png";

    bottomPipeImg = new Image();
    bottomPipeImg.src = "assets/images/bottompipe.png";

    requestAnimationFrame(update);
    setInterval(placePipes, 1500);
    document.addEventListener("keydown", moveBird);
};

function update() {
    requestAnimationFrame(update);
    if (gameOver) return;

    context.clearRect(0, 0, boardWidth, boardHeight);

    // Bird gravity
    velocityY += gravity;
    bird.y += velocityY;
    context.drawImage(birdImg, bird.x, bird.y, bird.width, bird.height);

    // Bird hits the ground
    if (bird.y > boardHeight) {
        gameOver = true;
    }

    // Pipes movement
    for (let i = 0; i < pipeArray.length; i++) {
        let pipe = pipeArray[i];
        pipe.x += velocityX;
        context.drawImage(pipe.img, pipe.x, pipe.y, pipe.width, pipe.height);

        // Score
        if (!pipe.passed && bird.x > pipe.x + pipe.width) {
            score++;
            pipe.passed = true;
        }

        // Collision detection
        if (detectCollision(bird, pipe)) {
            gameOver = true;
        }
    }

    // Remove pipes off-screen
    while (pipeArray.length > 0 && pipeArray[0].x < -pipeWidth) {
        pipeArray.shift();
    }

    // Score text
    context.fillStyle = "white";
    context.font = "45px sans-serif";
    context.fillText(score, 10, 45);

    if (gameOver) {
        context.fillText("GAME OVER", 40, boardHeight / 2);
    }
}

function placePipes() {
    if (gameOver) return;

    let randomPipeY = pipeY - pipeHeight / 4 - Math.random() * (pipeHeight / 2);
    let openingSpace = boardHeight / 4;

    let topPipe = {
        img: topPipeImg,
        x: pipeX,
        y: randomPipeY,
        width: pipeWidth,
        height: pipeHeight,
        passed: false
    };

    let bottomPipe = {
        img: bottomPipeImg,
        x: pipeX,
        y: randomPipeY + pipeHeight + openingSpace,
        width: pipeWidth,
        height: pipeHeight,
        passed: false
    };

    pipeArray.push(topPipe);
    pipeArray.push(bottomPipe);
}

function moveBird(e) {
    if (e.code == "Space" || e.code == "ArrowUp" || e.code == "KeyX") {
        velocityY = -3;

        if (gameOver) {
            // Restart game
            bird.y = birdY;
            pipeArray = [];
            velocityY = 0;
            score = 0;
            gameOver = false;
        }
    }
}

function detectCollision(a, b) {
    return (
        a.x < b.x + b.width &&
        a.x + a.width > b.x &&
        a.y < b.y + b.height &&
        a.y + a.height > b.y
    );
}
