<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Craig Kehl">
  <meta name="description" content="CSE341 About Me">
  <title>CSE-341 About Me</title> 
        <?php require './includes/links.php'; ?>
</head>
<body>
  
  <div id="pageContainer">
    <div id="headerContainer">
      <button class="navShowHide">            
        <span class="material-icons">menu</span>
      </button>
      <h1>About Me & My Family</h1>  
      <div class="loginIcon">
        <a href="#">
          <span class="material-icons">login</span>
        </a>
      </div>
    </div>

    <div id="sideNavContainer" style="display:none;">
      <ul>
        <li><a href="">About Me</a></li>
        <li><a href="">Projects</a></li>
      </ul>
    </div>

    <div id="mainSectionContainer">
      <div id="mainBannerContainer">
      </div>      
      <div id="mainContentContainer"> 
          <div class="card">
            <img class="card-img-top" src="../images/selfImageCropped.jpg" alt="self Image">
            <div class="card-body">
              <h5 class="card-title">Craig Kehl</h5>
              <ul class="card-text text-primary">
                <li>Past my prime</li>
                <li>But Just Getting Started</li>
                <li>Married 29 years</li>
                <li>5 Kids</li>
                <li>1 Daughter-in-Law</li>
                <li>0 Grandkids</li>
                <li>Founded 4 businesses</li>
              </ul>  
            </div> 
            <div class="cardBottom">
              <span>Personal Information</span>
            </div>
          </div>
      </div>
    </div>
  </div>  
    <?php include 'includes/commonScripts.php';  ?>  
</body>
</html>