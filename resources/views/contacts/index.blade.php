<?php
/*
 * File: index.blade.php
 * Created Date: 26 11 2022 11:52:39 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 26 11 2022 11:52:39 PM
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
    <title>Contact Information</title>
</head>
<body>
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
    <table>
        <tbody>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Manage</th>
            </tr>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->mobile }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>
                        <form action=" {{ route('contacts.destroy', $contact->id)}} " method="POST">

                            <a href="{{ route('contacts.show', $contact->id) }}">View</a>
                            <a href="{{ route('contacts.edit', $contact->id) }}">Update</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
