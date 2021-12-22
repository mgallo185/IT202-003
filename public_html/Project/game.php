<?php
require(__DIR__ . "/../../partials/nav.php");
 ?>

  <style>

#canvas {
  width: 600px;
  height: 400px;
  border: 1px solid black;
}

    </style>
</head>
    <h1>Shooter Arcade</h1>
    <h2> Make sure you're logged in</h2>
    <div id="center">
        <canvas id="canvas" width="600" height="400" tabindex="1"></canvas>
    </div>
    

<script>
// Arcade Shooter game

// Get a reference to the canvas DOM element
var canvas = document.getElementById('canvas');
// Get the canvas drawing context
var context = canvas.getContext('2d');

// Create an object representing a square on the canvas
function makeSquare(x, y, length, speed) {
  return {
    x: x,
    y: y,
    l: length,
    s: speed,
    draw: function() {
      context.fillRect(this.x, this.y, this.l, this.l);
    }
  };
}

// The ship the user controls
var ship = makeSquare(50, canvas.height / 2 - 25, 50, 5);

// Flags to tracked which keys are pressed
var up = false;
var down = false;
var space = false;
var right = false;
var left = false;
var rotateup = false;
var rotatedown = false;
var rotateleft = false;
var rotateright = false

// Is a bullet already on the canvas?
var shooting = false;
// The bulled shot from the ship
var bullet = makeSquare(0, 0, 10, 10);

// An array for enemies (in case there are more than one)
var enemies = [];

// Add an enemy object to the array
var enemyBaseSpeed = 2;
function makeEnemy() {
  var enemyX = canvas.width;
  var enemySize = Math.round((Math.random() * 15)) + 15;
  var enemyY = Math.round(Math.random() * (canvas.height - enemySize * 2)) + enemySize;
  var enemySpeed = Math.round(Math.random() * enemyBaseSpeed) + enemyBaseSpeed;
  enemies.push(makeSquare(enemyX, enemyY, enemySize, enemySpeed));
}

// Check if number a is in the range b to c (exclusive)
function isWithin(a, b, c) {
  return (a > b && a < c);
}

// Return true if two squares a and b are colliding, false otherwise
function isColliding(a, b) {
  var result = false;
  if (isWithin(a.x, b.x, b.x + b.l) || isWithin(a.x + a.l, b.x, b.x + b.l)) {
    if (isWithin(a.y, b.y, b.y + b.l) || isWithin(a.y + a.l, b.y, b.y + b.l)) {
      result = true;
    }
  }
  return result;
}

// Track the user's score
let gameData  = {
 score: 0,
}
var lives = 1;
// The delay between enemies (in milliseconds)
var timeBetweenEnemies = 5 * 1000;
// ID to track the spawn timeout
var timeoutId = null;
// Show the game menu and instructions
function menu() {
  erase();
  context.fillStyle = '#000000';
  context.font = '36px Arial';
  context.textAlign = 'center';
  context.fillText('Shoot \'Em!', canvas.width / 2, canvas.height / 4);
  context.font = '24px Arial';
  context.fillText('Click to Start', canvas.width / 2, canvas.height / 2);
  context.font = '14px Arial';
  context.fillText('Up/Down/Left/Right to move, W/S/A/D to change direction of bullet, Space to shoot.', canvas.width / 2, (canvas.height / 4) * 3);
  // Start the game on a click
  canvas.addEventListener('click', startGame);
}

// Start the game
function startGame() {
	// Kick off the enemy spawn interval
  timeoutId = setInterval(makeEnemy, timeBetweenEnemies);
  // Make the first enemy
  setTimeout(makeEnemy, 1000);
  // Kick off the draw loop
  draw();
  // Stop listening for click events
  canvas.removeEventListener('click', startGame);
}

// Show the end game screen
function endGame() {
	// Stop the spawn interval
  clearInterval(timeoutId);
  // Show the final score
  var finalScore = gameData.score;
  erase();
  context.fillStyle = '#000000';
  context.font = '24px Arial';
  context.textAlign = 'center';
  context.fillText('Game Over. Final Score: ' + finalScore, canvas.width / 2, canvas.height / 2);
if(gameData.score > 0){
  let data = {
  score :finalScore
 };
$.ajax({
type: "POST",
url: "AJAX/save_score.php",
contentType: "application/json",
data: JSON.stringify({
  data: data
}),
success: (resp,status,xhr) => {
  console.log(resp,status,xhr);
},
error: (xhr,status,error) => {
  console.log(xhr,status,error);
}
});
}





 // //fetch api way
 // fetch("AJAX/save_score.php", {
  //method: "POST",
  //headers: {
  // "Content-type": "application/json",
  // "X-Requested-With": "XMLHttpRequest",
  //},
  //body: JSON.stringify({
  //"data": data
  //})
  //}).then(async res => {
  //let data = await res.json();
  // console.log("received data", data);
  // console.log("saved score");
   //window.location.reload(); //lazily reloading the page to get a new nonce for next game
  //})


}
// Listen for keydown events
canvas.addEventListener('keydown', function(event) {
  event.preventDefault();
  if (event.keyCode === 38) { // UP
    up = true;

  }
  if (event.keyCode === 40) { // DOWN
    down = true;
  }
  if (event.keyCode === 32) { // SPACE
    shoot();
  }
  if (event.keyCode === 39) { // right
    right = true;
  }
  if (event.keyCode === 37) { // left
    left = true;
  }


});

// Listen for keyup events
canvas.addEventListener('keyup', function(event) {
  event.preventDefault();
  if (event.keyCode === 38) { // UP 
    up = false;
  }
  if (event.keyCode === 40) { // DOWN
    down = false;
  }
  if (event.keyCode === 39) { // right
    right = false;
  }
  if (event.keyCode === 37) { // left
    left = false;
  }
  if (event.keyCode === 87) { // rotate up
   rotateup = true;
   rotatedown = false;
   rotateleft = false;
   rotateright = false;
  }
  if (event.keyCode === 83) { // rotate down
    rotatedown = true;
    rotateup = false;
  rotateleft = false;
   rotateright = false;
  }

 if (event.keyCode === 65) { // rotate left
    rotateleft = true;
    rotateright = false
    rotateup = false;
   rotatedown = false;
  }

  if (event.keyCode === 68) { // rotate right
    rotateright = true;
    rotateleft = false;
    rotateup = false;
   rotatedown = false;
  }
});

// Clear the canvas
function erase() {
  context.fillStyle = '#FFFFFF';
  context.fillRect(0, 0, 600, 400);
}

// Shoot the bullet (if not already on screen)
function shoot() {
  if (!shooting) {
    shooting = true;
    bullet.x = ship.x + ship.l;
    bullet.y = ship.y + ship.l / 2;
  }
}

// The main draw loop
function draw() {
  erase();
  var gameOver = false;
  // Move and draw the enemies
  enemies.forEach(function(enemy) {
    enemy.x -= enemy.s;

    if (enemy.x < 0 ) {
      gameData.score = gameData.score - 1;
    }
    context.fillStyle = '#00FF00';
    enemy.draw();
  });
  // Collide the ship with enemies
  enemies.forEach(function(enemy, i) {
    if (isColliding(enemy, ship)) {
      lives = lives - 1;
      enemies.splice(i, 1);

    }
    if(enemy.x < 0){
      enemies.splice(i,1);
    }
  });
  // Move the ship
  if (down) {
    ship.y += ship.s;
  }
  if (up) {
    ship.y -= ship.s;
  }
  if (right) {
    ship.x += ship.s;
  }
  if (left) {
    ship.x -= ship.s;
  }


  // Don't go out of bounds
  if (ship.y < 0) {
    ship.y = 0;
  }
  if (ship.y > canvas.height - ship.l) {
    ship.y = canvas.height - ship.l;
  }

  if (ship.x < 0) {
    ship.x = 0;
  }

  if (ship.x > canvas.width - ship.l) {
    ship.x = canvas.width - ship.l;
  }

  // Draw the ship
  context.fillStyle = '#FF0000';
  ship.draw();
  // Move and draw the bullet

 
  if (shooting ) {
    // Move the bullet

  if( rotateup){
    bullet.y -= bullet.s;
    rotatedown = false;
  } else
  if (rotateright){
    bullet.x += bullet.s;
    rotateleft = false;
  } else
  if( rotatedown){
    bullet.y += bullet.s;
    rotateup = false;
  } else
  if (rotateleft){
    bullet.x -= bullet.s;
    rotateright = false;
  } else
  bullet.x += bullet.s;


  
    // Collide the bullet with enemies
    enemies.forEach(function(enemy, i) {
      if (isColliding(bullet, enemy)) {
        enemies.splice(i, 1);
        gameData.score++;
        shooting = false;
        // Make the game harder
        if (gameData.score % 10 === 0 && timeBetweenEnemies > 1000) {
          clearInterval(timeoutId);
          timeBetweenEnemies -= 1000;
          timeoutId = setInterval(makeEnemy, timeBetweenEnemies);
        } else if (gameData.score % 5 === 0) {
          enemyBaseSpeed += 1;
        }
         //adding more lives for every 10 points
   if(gameData.score%10 ==0 && gameData.score > 0 ){
      lives = lives + 1;
    }
      }
    });
    
    // Collide with the wall
    if (bullet.x > canvas.width || bullet.x < 0 || bullet.y > canvas.height || bullet.y < 0 ) {
      shooting = false;
    }
    // Draw the bullet
    context.fillStyle = '#0000FF';
    bullet.draw();
  }

  // Draw the score and lives 
  context.fillStyle = '#000000';
  context.font = '24px Arial';
  context.textAlign = 'left';
  context.fillText('Score: ' + gameData.score, 1, 25)

  context.fillStyle = '#000000';
  context.font = '24px Arial';
  context.textAlign = 'left';
  context.fillText('Lives: ' + lives, 1, 75)
  // End or continue the game
  if( lives == 0){
    gameOver = true;
  }
  if (gameOver) {
    endGame();
  } else {
    window.requestAnimationFrame(draw);
  }
}

// Start the game
menu();
canvas.focus();
</script>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>
