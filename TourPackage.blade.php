<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tour Packages</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
  background: #f4f6f9;
}
.sidebar {
  height: 100vh;
  background: #10b981;
}
.sidebar a {
  color: white;
  display: block;
  padding: 10px;
  text-decoration: none;
  border-radius: 8px;
  margin-bottom: 10px;
}
.sidebar a.active,
.sidebar a:hover {
  background: rgba(255,255,255,0.2);
}
</style>
</head>

<body>

<div class="container-fluid">
  <div class="row">

    <!-- Sidebar -->
    <div class="col-md-2 sidebar p-3 text-white">
      <h4>Hale Travels</h4>
        <br>
      <a href="/dashboard">Dashboard</a>
      <a href="/TourPackage" class="active">Tour Packages</a>
      <a href="/admin_login">Login</a>
      <a href="/admin_category">Category</a>

      <br><br><br><br><br><br><br><br><br><br><br><br>
      <div class="mt-5">
        <a href="#">Settings</a>
      </div>
    </div>

    <!-- Main -->
    <div class="col-md-10 p-4">

      <!-- Topbar -->
      <div class="d-flex justify-content-between mb-4">
        <input class="form-control w-25" type="text" placeholder="Search">
        <div>🔔 👤</div>
      </div>

      <!-- Add Package -->
      <div class="card mb-4">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div>
            <h5>Add New Package</h5>
            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing.</p>
          </div>
          <button class="btn btn-success rounded-circle fs-4 px-3">+</button>
        </div>
      </div>

      <!-- Table -->
      <div class="card">
        <div class="card-body">
          <h5>All Packages</h5>
          <p>Lorem Ipsum is simply dummy text of the printing.</p>

          <div class="table-responsive">
            <table class="table table-hover align-middle">
              <thead>
                <tr>
                  <th>Host</th>
                  <th>Location</th>
                  <th>Package</th>
                  <th>Type</th>
                  <th>Duration</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>Ryan Richards</td>
                  <td>Khulna</td>
                  <td>Sundarbans</td>
                  <td>Group</td>
                  <td>3D 2N</td>
                  <td>1234567890</td>
                  <td>ryan@mail.com</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-light" data-bs-toggle="dropdown">⋮</button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">View</a></li>
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Richard Holland</td>
                  <td>Chittagong</td>
                  <td>Cox’s Bazar</td>
                  <td>Group</td>
                  <td>2D 3N</td>
                  <td>9876543210</td>
                  <td>richard@mail.com</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-light" data-bs-toggle="dropdown">⋮</button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">View</a></li>
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Timothy Vargas</td>
                  <td>Sylhet</td>
                  <td>Jaflong</td>
                  <td>Single</td>
                  <td>3D 2N</td>
                  <td>5555555555</td>
                  <td>timothy@mail.com</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-light" data-bs-toggle="dropdown">⋮</button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">View</a></li>
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<!-- Bootstrap JS (for dropdown) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>