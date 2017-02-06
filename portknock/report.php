<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="author" content="Bernard Parinas">
 <meta name="emailAddress" content="bparinas@hotmail.com" />
 <title>Port Scan Report</title>
</head>
<body>
 <h1>Network Port Scan Report</h1>
 <?php echo "Last modified: ".date("F d Y H:i:s.",filemtime("report.php")); ?>
 <br><br>
 <div>
 <?php
  print <<< HERE
  <table border = "1">
  <tr>
   <th>Host</th>
   <th>Hostname</th>
   <th>Protocol</th>
   <th>Port</th>
   <th>Service</th>
   <th>State</th>
   <th>Product</th>
   <th>Version</th>
  </tr>
  HERE;

  $row = 1;

  if (($handle = fopen("scanout.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        for ($c=0; $c < $num; $c++) {
              $col = explode(";",$data[$c]);
              echo "<tr>";
              echo "<td>" . $col[0] . "</td>";
              echo "<td>" . $col[1] . "</td>";
              echo "<td>" . $col[3] . "</td>";
              echo "<td>" . $col[4] . "</td>";
              echo "<td>" . $col[5] . "</td>";
              echo "<td>" . $col[6] . "</td>";
              echo "<td>" . $col[7] . "</td>";
              echo "<td>" . $col[10] . "</td>";
              echo "</tr>";
        }
    }
    fclose($handle);
  }

  print "</table>";
?>
</div>
</body>
</html>
