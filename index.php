<?php
    // bu yerda ismlar
    $ism = "Norbek";
    $ism1 = "Eshmat";
    $ism2 = "Toshmat";
    // bu yerda pullar
    $pul = "$1200";
    $pul1 = "$1000";
    $pul2 = "$5000";

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Jadval</title>
   <style>
      table {
         border-collapse: collapse;
      }
      th {
         border: 1.5px solid black;
         padding: 10px;
      }
   </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>
                    <?=$ism?>
                </th>
                <th>
                    <?=$pul?>
                </th>
            </tr>
            <tr>
                <th>
                    <?=$ism1?>
                </th>
                <th>
                    <?=$pul1?>
                </th>
            </tr>
            <tr>
                <th>
                    <?=$ism2?>
                </th>
                <th>
                    <?=$pul2?>
                </th>
            </tr>
        </thead>
    </table>
</body>
</html>
