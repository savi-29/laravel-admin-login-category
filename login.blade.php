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
    <h2>Admin Login</h2>

    <form id="login-form">
        @csrf

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<script>
$('#login-form').submit(function(e){
    e.preventDefault();

    $.ajax({
        url: "{{ url('admin_login') }}",
        type: "POST",
        data: $(this).serialize(),

        success: function(data) {
            if (data == 1) {
                window.location.href = "dashboard";
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