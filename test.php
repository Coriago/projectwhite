<html>
<head><title>Print and Text</title></head>
<body>
<table border="0">
  <tr>
    <td>
      <?php
        $name = $_POST["Name"];
        echo "Name: " . $name;
      ?>
    </td>
  </tr>
  <tr>
    <td>
      <?php
        $name = $_POST["Address"];
        echo "Address: " . $name;
      ?>
    </td>
  </tr>
  <tr>
    <td>
      <?php
        $name = $_POST["City"];
        echo "City: " . $name;
      ?>
    </td>
  </tr>
</table>
</body>
</html>
