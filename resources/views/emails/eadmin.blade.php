<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buy Nitification</title>
</head>
<body>
    <center>
        <img src="{{ asset('around/img/LOGO_DOMINICANA.png') }}" alt="">
    </center>
    <p><i>Buy Notification</i> - Client Details</p>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Price</th>
                <th>Purchase</th>
                <th>Code</th>
                <th>Phone</th>
                <th>Id Payment</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $book->nombre }}</td>
                <td>{{ $book->correo }}</td>
                <td>{{ $book->precio }}</td>
                <td>{{ $book->purchase }}</td>
                <td>{{ $book->code }}</td>
                <td>{{ $book->telefono }}</td>
                <td>{{ $book->id_pago }}</td>
                <td>{{ $book->created_at }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>