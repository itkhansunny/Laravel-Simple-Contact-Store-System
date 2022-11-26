<?php
/*
 * File: create.blade.php
 * Created Date: 27 11 2022 2:21:16 AM
 * Author: Khan Sunny
 * -----
 * Last Modified: 27 11 2022 2:21:16 AM
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
    <title>Contact Create Form</title>
</head>
<body>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <p>
            <label for="name">Name</label>
            <input id="name" type="text" name="name">
        </p>
        <p>
            <label for="mobile">Mobile</label>
            <input id="mobile" type="text" name="mobile">
        </p>
        <p>
            <label for="name">Address</label>
            <textarea name="address" id="address" cols="30" rows="10"></textarea>
        </p>
        <p>
            <button type="submit">Save</button>
        </p>
    </form>
</body>
</html>
