<!DOCTYPE html>
<html>
<head><h1>11th FORM</h1>
  <link rel="stylesheet" href="css_files/Admn_form.css">

</head>
<body>
<form action="action_page.html" method="post">

Name : </b> <input type="text" name="name"><br><br>
Your Group : <input type="radio" name="Group" value="group1">
<label for="group1">Group1</label><br>
<input type="radio" name="Group" value="group2">
<label for="group2">Group2</label><br>
<input type="radio" name="Group" value="group3">
<label for="group3">Group3</label><br>
<input type="radio" name="Group" value="group4">
<label for="group4">Group4</label><br><br>
<input type="submit">

<?php
$name = $_POST['name'];
$group = $_POST['Group'];


 ?>
