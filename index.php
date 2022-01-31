<?php
  // Variables and constants initialization
  $title = 'PHP Mail Check';
  $subtitle = "Checking an array of e-mails";
  $email_list =
  ['patrizia@yahoo.it',
  'simone@tiscali.it',
  'giovanni@libero.it',
  'cinzia@gmail.com',
  'federica@email.com',
  'laura@virgilio.it',
  'mario@gmail.com',
  'giuseppe@alice.it',
  'valentina@gmail.com'];
  $user_email = 'mario@gmail.com'; // any email either or not present in the array
  $message = '';
?>

<!-- ............................. HTML ............................. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Check Mail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="page-wrapper">
      <div class="container">
        <div class="row">
          <h1>
            <?php echo $title; ?>
          </h1>
        </div>
        <div class="row">
          <h2>
            <?php echo $subtitle; ?>
          </h2>
        </div>
        <div class="row">
          <!-- Printing data -->
          <div id="data-info">
            <h3>Data Information</h3>
            <p>
              DATA INFO PROVA:
              <?php
                echo 'DATA INFO PROVA';
              ?>
            </p>
          </div>
        </div>
        <div class="row">
          <!-- Tickets Prices -->
          <div id="results">
            <h3>Results</h3>
            <p class="message">
              <?php
                echo $message;
              ?>
            </p>
            <div class="results-box">
              <p>
                RESULTS BOX PROVA:
                <span>
                  <?php
                    echo 'PROVA';
                  ?>
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
