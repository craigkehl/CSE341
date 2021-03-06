<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Craig Kehl">
  <meta name="description" content="CSE341 Team Assignment to build a home page">
  <title>W2 Team Assignment</title>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
  <h1>Week 2 Team Activity</h1>
  <section>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://cdn.pixabay.com/photo/2014/01/18/10/14/vaulted-cellar-247391_960_720.jpg" alt="Brick Arch Tunel">
      <div class="card-body">
        <h5 class="card-title">The Canal Bend</h5>
        <p class="card-text text-primary">Jogging the canal in San Antonio</p>  
      </div> 
        <input type="text" class="form-control" placeholder="type color" aria-label="new color" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <span class="btn btn-primary" id="basic-addon2">Change</span>
        </div>
    </div>
    
    
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/06/08/15/26/hallway-802068_960_720.jpg" alt="1990's style Tunel">
      <div class="card-body">
        <h5 class="card-title">Millennial Falcon Tunel?</h5>
        <p class="card-text text-primary">Must be a 1990's Star Wars Engineer</p>
      </div>
      <input type="text" class="form-control" placeholder="type color" aria-label="new color" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <span class="btn btn-primary" id="basic-addon2">Change</span>
      </div>
    </div>
    
    <div class="card" id="card3" style="width: 18rem;">
      <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/01/15/16/16/staircase-600468_960_720.jpg" alt="Stone Stairs">
      <div class="card-body">
        <h5 class="card-title">Stone Descent</h5>
        <p class="card-text text-primary">Does anyone else feel quizzy?</p>
      </div>
      <input type="text" class="form-control" placeholder="type color" aria-label="new color" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <span class="btn btn-primary" id="basic-addon2">Change</span>
      </div>
    </div> 
  </section>     
  <button type="button" class="btn btn-primary" onclick="fade()">Fade Stone Descent</button>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./js/main.js"></script> 
</body>
</html>