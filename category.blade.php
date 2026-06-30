<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

<div class="container">
    <h2>Categories</h2>
<form action="/category_insert" method="POST">
    @csrf

    <input type="text" name="category_name" placeholder="Enter name">
    <input type="text" name="category_desc" placeholder="Enter description">

    <button type="submit">Submit</button>
</form>
</div>


<script>
$('#login-form').submit(function(e){
    e.preventDefault();

    $.ajax({
        url: "{{ url('admin_category') }}",
        type: "POST",
        data: $(this).serialize(),

        success: function(data) {
            if (data == 1) {
                window.location.href = "category_list";
            } 
            else if (data == 404) {
                alert("User is blocked");
            } 
            else {
                alert("Invalid email or password");
            }
        }
    });
});
</script>
</body>
</html>