<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Area of Triangle, in PHP" />
    <meta name="keywords" content="mths, ics2o" />
    <meta name="author" content="Giordan Zeina" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>Area of triangle,in PHP</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Area of Triangle, in PHP</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./images/income_tax.jpg" alt="income image" width="250" />
        </div>
        <div class="page-content-php">
          <div name="salary">
            <?php
            $hoursWorked = $_GET["hours-worked"];
            $hourlyWage = $_GET["hourly-wage"];
            $TAX_RATE = 0.18;

            // process
            $salary = $hoursWorked * $hourlyWage;
            $government = $salary * $TAX_RATE;

            // output
            echo "Your pay will be: " . $salary. round(2);
            echo "<br />";
            echo "<br />";
            echo "The government will take: " . $government . round(2);
            echo "<br />";

            ?>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>