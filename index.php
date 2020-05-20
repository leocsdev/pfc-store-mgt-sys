<?php
  require_once('storeclass.php');

  $myStore = new MyStore();
  $users = $myStore->getUsers();

  print_r($users);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Super Mart | MyStore</title>
</head>
<body>
  
</body>
</html>