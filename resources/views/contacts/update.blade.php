<?php
/*
 * File: update.blade.php
 * Created Date: 27 11 2022 2:46:36 AM
 * Author: Khan Sunny
 * -----
 * Last Modified: 27 11 2022 2:46:36 AM
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
    <title>Contact Update Form</title>
</head>
<body>
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method("PUT")
        <p>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ $contact->name }}">
        </p>
        <p>
            <label for="mobile">Mobile</label>
            <input id="mobile" type="text" name="mobile" value="{{ $contact->mobile }}">
        </p>
        <p>
            <label for="name">Address</label>
            <textarea name="address" id="address" cols="30" rows="10">{{ $contact->address }}</textarea>
        </p>
        <p>
            <button type="submit">Update</button>
        </p>
    </form>
</body>
</html>
