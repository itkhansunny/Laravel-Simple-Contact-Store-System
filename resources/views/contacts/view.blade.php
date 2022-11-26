<?php
/*
 * File: view.blade.php
 * Created Date: 27 11 2022 2:43:13 AM
 * Author: Khan Sunny
 * -----
 * Last Modified: 27 11 2022 2:43:14 AM
 * Modified By: Khan Sunny
 * -----
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Information View</title>
</head>
<body>
    <h2>Name: {{$contact->name}}</h2>
    <h3>Mobile: {{$contact->mobile}}</h3>
    <address>Address: {{$contact->address}}</address>
</body>
</html>
