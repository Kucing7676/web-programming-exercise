<!DOCTYPE html>
<html lang="en">

<head>
  <title>Headings</title>
</head>

<body>
  <?php
    for ($i=1; $i <= 6; $i++) {
      echo "<h${i}>Heading ${i}</h${i}>";
    }
  ?>
</body>

</html>