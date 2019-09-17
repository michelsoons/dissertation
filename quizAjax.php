
<?php
      $data = json_decode($_POST['data']);


      $response_array['status'] = 'success';

      $answer1 = $data[0];
      $answer2 = $data[1];
      $answer3 = $data[2];
      $answer4 = $data[3];
      $answer5 = $data[4];

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
      // A - front
      // B - backend
      // C - mobile
      // D - software
      global $totalA, $totalB, $totalC, $totalD;

      switch($answer1) {
            case "A":
                  $totalA += 1.17;
                  $totalC += .7; 
                  $totalD += .3;
                  break;
            case "B":
                  $totalB += 1.15; 
                  $totalD += .1;
                  break;
            case "C":
                  $totalC += 1.13; 
                  $totalA += .2;
                  $totalD += .2;
                  break;
            case "D":
                  $totalD += 1.16; 
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
                  $totalB += .4;
                  break;
            case "B":
                  $totalB += 1.15; 
                  $totalA += .2;
                  break;
            case "C":
                  $totalC += 1.13; 
                  $totalA += .1;
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
                  $totalD += .2;
                  break;
            case "C":
                  $totalC += 1.13;  
                  $totalB += .5; 
                  $totalD += .4;
                  break;
            case "D":
                  $totalD += 1.16; 
                  $totalB += .4; 
                  $totalA += .2;
                  break;
      }
}


function calculateAnswer5($answer5) {
      global $totalA, $totalB, $totalC, $totalD;

      switch($answer5) {
            case "A":
                  $totalA += 1.17; 
                  $totalB += .8; 
                  $totalC += .7;
                  $totalD += .6;
                  break;
            case "B":
                  $totalB += 1.15;
                  $totalC += .7;
                  $totalD += .6;
                  break;
            case "C":
                  $totalC += 1.14; 
                  $totalA += .8; 
                  break;
            case "D":
                  $totalD += 1.16; 
                  $totalC += .3;
                  $totalB += .2;
                  $totalA += .1;
                  break;
      }
}

function calculateResponse() {
      global $totalA, $totalB, $totalC, $totalD;      

      if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD) {
            echo json_encode(array('page' => 'front.php'));
            die();
      }

      if ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD) {
            echo json_encode(array('page' => 'back.php'));
            die();
      }

      if ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD) {
           echo json_encode(array('page' => 'mobile.php'));
           die();
      }

      if ($totalD > $totalA && $totalD > $totalB && $totalD > $totalC) {
            echo json_encode(array('page' => 'software.php'));
            die();
      }
}
?>

