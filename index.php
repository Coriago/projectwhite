<html>

<head>

  <!--Fonts-->
  <meta charset="UTF-8"/>
  <!--Description-->
  <meta name="description" content="A personal webpage"/>
  <!--Keywords or tags-->
  <meta name="keywords" content="personal, php, test"/>
  <!--Archiving, Recommended left default-->
  <meta name="robots" content="index,follow"/>
  <!--Java Script-->
  <script src="TEMPLATE.js"></script>
  <!--Base URL-->
  <base href="http://projectwhite.tk/"/>
  <!--CSS stylesheets-->
  <link rel="stylesheet" href="TEMPLATE.css"/>
  <!--Icon-->
  <link rel="icon" href="C:\wamp\www\favicon.ico"/>
  <!--Title-->
  <title>Project White</title>

</head>

<body>
  <h1>Personal Info</h1>
  <hr>
  <form action="test.php" method="post">

    <table border="0">

      <tr>
        <td>Name</td>
        <td><input name="Name" type="text"></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><input name="Address" type="text"></td>
      </tr>
      <tr>
        <td>City</td>
        <td><input name="City" type="text"></td>
      </tr>
      <tr>
        <td><input type="submit"></td>
      </tr>

    </table>
  </form>

  <?php

    echo "Sandwiches: ";

    $sandwiches = array("Ham Sandwich", "Turkey Sandwich", "Amazing Sandwich");

    foreach ($sandwiches as $sandwich) {
      echo $sandwich . PHP_EOL;
    }
  ?>

</body>
</html>
