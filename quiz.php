
<?php
      $servername = "localhost";
      $username = "root";
      $password = "";

      // Create connection
      $conn = new mysqli($servername, $username, $password);

      // Check connection
      if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      } 
      //echo "<div class='container text-center'> Connected successfully</div> <br>";
?>
<?php

      $data = json_decode($_POST['data']);
      //var_dump(json_decode($data));
      //var_dump(json_decode($data, true));

      $response_array['status'] = 'success';
      //header('Content-type: application/json');
      //echo json_encode($response_array);

      $answer1 = $data[0];
      $answer2 = $data[1];
      $answer3 = $data[2];
      $answer4 = $data[3];
      $answer5 = $data[4];

      //echo 'youre here !';

      $totalA = 0;
      $totalB = 0;
      $totalC = 0;
      $totalD = 0;

      calculateAnswer1($answer1);
      calculateAnswer2($answer2);
      calculateAnswer3($answer3);
      calculateAnswer4($answer4);
      calculateAnswer5($answer5);

      calculateResponse();

function calculateAnswer1($answer1) {
      global $totalA, $totalB, $totalC, $totalD;

      switch($answer1) {
            case "A":
                  $totalA += 1.17; 
                  $totalD += .06;
                  break;
            case "B":
                  $totalB += 1.15; 
                  $totalC += .05;
                  break;
            case "C":
                  $totalC += 1.13; 
                  $totalA += .05;
                  break;
            case "D":
                  $totalD += 1.16; 
                  $totalA += .07;
                  break;
      }
}

function calculateAnswer2($answer2) {
      global $totalA, $totalB, $totalC, $totalD;

      switch($answer2) {
            case "A":
                  $totalA += 1.23;
                  break;
            case "B":
                  $totalB += 1.15;
                  break;
            case "C":
                  $totalC += 1.13;
                  break;
            case "D":
                  $totalD += 1.16; 
                  break;
      }
}

function calculateAnswer3($answer3) {
      global $totalA, $totalB, $totalC, $totalD;

      switch($answer3) {
            case "A":
                  $totalA += 1.17; 
                  $totalC += .05;
                  break;
            case "B":
                  $totalB += 1.15; 
                  $totalC += .03;
                  break;
            case "C":
                  $totalC += 1.13; 
                  $totalB += .07;
                  break;
            case "D":
                  $totalD += 1.16; 
                  break;
      }
}

function calculateAnswer4($answer4) {
      global $totalA, $totalB, $totalC, $totalD;

      switch($answer4) {
            case "A":
                  $totalA += 1.17;
                  break;
            case "B":
                  $totalB += 1.15;
                  break;
            case "C":
                  $totalC += 1.13; 
                  $totalA += .05; 
                  $totalB += .06; 
                  $totalD += .07;
                  break;
            case "D":
                  $totalD += 1.16; 
                  $totalB += .04; 
                  $totalA += .045; 
                  $totalC += .034;
                  break;
      }
}


function calculateAnswer5($answer5) {
      global $totalA, $totalB, $totalC, $totalD;

      switch($answer5) {
            case "A":
                  $totalA += 1.17; 
                  $totalD += .08; 
                  break;
            case "B":
                  $totalB += 1.15;
                  break;
            case "C":
                  $totalC += 1.14; 
                  $totalA += .06; 
                  $totalD += .08;
                  break;
            case "D":
                  $totalD += 1.16; 
                  $totalC += .04;
                  break;
      }
}

function calculateResponse() {
      global $totalA, $totalB, $totalC, $totalD;
      if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD) {
            //header('Location: front.php');
            //echo 'front';
            echo json_encode(array('page' => 'front.php'));
      }

      if ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD) {
            //header('Location: back.php');
            //echo 'back';
            echo json_encode(array('page' => 'back.php'));
      }

      if ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD) {
           //header('Location: mobile.php');
           //echo 'mobile';
           echo json_encode(array('page' => 'mobile.php'));
      }

      if ($totalD > $totalA && $totalD > $totalB && $totalD > $totalC) {
           //header('Location: software.php');
           //echo 'soft';
           echo json_encode(array('page' => 'software.php'));
      }   
}
?>

