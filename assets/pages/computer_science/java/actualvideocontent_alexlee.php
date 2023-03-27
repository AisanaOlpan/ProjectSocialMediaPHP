

  <?php
      $lien="";
      $nom_vid="";
      if (isset($_GET['videoA'])){
        switch ($_GET['videoA']) {
          case '1':
            $lien="https://www.youtube.com/embed/orUTq3CahRE";
            $nom_vid="Reverse String in Java";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/3gzvVPD3n0w";
            $nom_vid="How To Make Pattern In Java Using For Loop";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/GAn5evoACsM";
            $nom_vid="How To Detect Arrow Keys In Java";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/dVTgNsv3pX4";
            $nom_vid="Add Two Numbers From a User";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/ucS3vwP9jnk";
            $nom_vid="Simple Java Program Example For Beginners";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/tqI18_X_uoc";
            $nom_vid="How To Find Duplicate Characters In A String In Java";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/dOvYkzKfsdg";
            $nom_vid="How To Calculate Age From Date of Birth in Java";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/Hk9n0cWE2OI";
            $nom_vid="Prime Numbers Program ";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/AoRYeB7Os3M";
            $nom_vid="Palindrome Java Program ";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/OZuzm1i9g1c";
            $nom_vid="Factorial Program in Java with Recursion ";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/jFTbrwZmQzI";
            $nom_vid="Java Program For Beginners ";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/qeJXCL6qRQA";
            $nom_vid="Practice Java Program - Build your own Reaction Timer ";
            break;
          case '13':
            $lien="https://www.youtube.com/embed/gQb3dE-y1S4";
            $nom_vid="Tic Tac Toe Java Game - Build a Tic Tac Toe Game in 30 Minutes ";
            break;
          case '14':
            $lien="https://www.youtube.com/embed/L8loHaj-Bgo";
            $nom_vid="Java Currency Formatter - HackerRank Solution Practice Program ";
            break;
          case '15':
            $lien="https://www.youtube.com/embed/VGq6i1CDpdc";
            $nom_vid="Fortune Cookie Java Program - Build a Fortune Program in 11 Minutes ";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/Sw9gZnRfADA";
            $nom_vid="This Program Predicts My Subscriber Count - Exponential Growth Java Program Tutorial ";
            break;
          case '17':
            $lien="https://www.youtube.com/embed/xZtnL5aJQ98";
            $nom_vid="Capitalize The First Letter of a String in Java";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/8wlE6DgOWBs";
            $nom_vid="Java Encryption and Decryption Tutorial (Basic)";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/rNf8mT0qHLY";
            $nom_vid="Java: Fart Generator (Easy Java Program For Beginners)";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/4-6gHsg2xpU";
            $nom_vid="Put Your Java Program on a Website (Tutorial) ";
            break;
          case '21':
            $lien="https://www.youtube.com/embed/Dzx0-9cTIMc";
            $nom_vid="Typing Speed Java Program - Calculate WPM (Words Per Minute) ";
            break;
          default:
            # code...
            break;
        }
      }
   ?>


<div class="video_accordian_container">
    <div class="row" style="margin-left: 250px;">
        <div class="col-md-8">
          <!-- The actual video content -->
          <div class="iframe-container">
            <iframe width="800" height="550" src="<?php echo isset($lien)?$lien:''; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-4">
          <!-- The lessons within the same chapter  -->
          <div class="card_item">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Chapter 1 : Practice problems
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <a href="?videoA=1">&#10170 Reverse String in Java </a><br>
                <a href="?videoA=2">&#10170 How To Make Pattern In Java Using For Loop </a><br>
                <a href="?videoA=3">&#10170 How To Detect Arrow Keys In Java </a><br>
                <a href="?videoA=4">&#10170 Add Two Numbers From a User </a><br>
                <a href="?videoA=5">&#10170 Simple Java Program Example For Beginners </a><br>
                <a href="?videoA=6">&#10170 How To Find Duplicate Characters In A String In Java </a><br>
                <a href="?videoA=7">&#10170 How To Calculate Age From Date of Birth in Java </a><br>
                <a href="?videoA=8">&#10170 Prime Numbers Program  </a><br>
                <a href="?videoA=9">&#10170 Palindrome Java Program </a><br>
                <a href="?videoA=10">&#10170 Factorial Program in Java with Recursion </a><br>
                <a href="?videoA=11">&#10170 Java Program For Beginners </a><br>
                <a href="?videoA=12">&#10170 Practice Java Program - Build your own Reaction Timer </a><br>
                <a href="?videoA=13">&#10170 Tic Tac Toe Java Game - Build a Tic Tac Toe Game in 30 Minutes </a><br>
                <a href="?videoA=14">&#10170 Java Currency Formatter - HackerRank Solution Practice Program </a><br>
                <a href="?videoA=15">&#10170 Fortune Cookie Java Program - Build a Fortune Program in 11 Minutes </a><br>
                <a href="?videoA=16">&#10170 This Program Predicts My Subscriber Count - Exponential Growth Java Program Tutorial </a><br>
                <a href="?videoA=17">&#10170 Capitalize The First Letter of a String in Java  </a><br>
                <a href="?videoA=18">&#10170 Java Encryption and Decryption Tutorial (Basic) </a><br>
                <a href="?videoA=19">&#10170 Java: Fart Generator (Easy Java Program For Beginners) </a><br>
                <a href="?videoA=20">&#10170 Put Your Java Program on a Website (Tutorial) </a><br>
                <a href="?videoA=21">&#10170 Typing Speed Java Program - Calculate WPM (Words Per Minute) </a><br>

              </div>
            </div>
          </div>
        </div>
    </div>
</div>

