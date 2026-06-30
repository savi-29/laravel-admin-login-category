<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>
        //@foreach ($data['customers'] ?? [] as $customer)
         @foreach ($data['customer'] as $customer)

        <tr>
            <td>{{ $customer->customer_id }}</td>
            <td>{{ $customer->customer_fname }}</td>
            <td>{{ $customer->customer_lname }}</td>
            <td>{{ $customer->customer_email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html> 