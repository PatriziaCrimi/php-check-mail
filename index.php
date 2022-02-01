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
  $user_email = 'valentina@gmail.com'; // any email either or not present in the array
  $isEmail= false;
  $message_position = 'The user\'s e-mail is not in the array.';
  $message_result = 'Your e-mail ' . $user_email . ' has been added to our mailing list.';

  // ********** Email check **********
  for ($i=0; $i < count($email_list); $i++) {
    if(in_array($user_email, $email_list)) {
      $isEmail = true;
      $position = $i + 1;
      $message_position = 'The user\'s e-mail has been found in position ' . $position. ' within the array.';
      $message_result ='Your e-mail ' . $user_email . ' is already on our e-mail list.';
    }
  }
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
              Emails list:
              <?php for ($i=0; $i < count($email_list); $i++) { ?>
                <ul>
                  <li>
                    <?php echo $email_list[$i]; ?>
                  </li>
                </ul>
              <?php }; ?>
            </p>
            <p>
              User e-mail:
              <?php
                echo $user_email;
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
                echo $message_position;
              ?>
            </p>
            <div class="results-box">
              <p>
                <span>
                  SUBSCRIPTION:
                </span>
                  <?php
                    echo $message_result;
                  ?>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Tickets Prices -->
          <div id="updated-list">
            <h3>Updated list</h3>
            <p>
              Updated emails list:
              <?php
                if(!in_array($user_email, $email_list)) {
                  $email_list[] = $user_email;
                }
                for ($i=0; $i < count($email_list); $i++) {
              ?>
              <ul>
                <li>
                  <?php echo $email_list[$i]; ?>
                </li>
              </ul>
              <?php
                };
              ?>
            </p>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
