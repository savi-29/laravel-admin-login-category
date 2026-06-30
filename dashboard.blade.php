<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hale Travels Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CDN -->
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
      text-decoration: none;
      display: block;
      padding: 10px;
      border-radius: 8px;
      margin-bottom: 10px;
    }
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
      <a href="/TourPackage">Tour Packages</a>
      <a href="/admin_login">Login</a>
      <a href="/admin_category">Category</a>

      <br><br><br><br><br><br><br><br><br><br><br><br>
      <div class="mt-auto pt-5">
        <a href="#">Settings</a>
      </div>
    </div>

    <!-- Main Content -->
    <div class="col-md-10 p-4">

      <!-- Topbar -->
      <div class="d-flex justify-content-between mb-4">
        <input type="text" class="form-control w-25" placeholder="Search">
        <div>🔔 👤</div>
      </div>

      <!-- Welcome -->
      <div class="card mb-4">
        <div class="card-body">
          <h4>Welcome to Hale Travels</h4>
          <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
        </div>
      </div>

      <!-- Stats -->
      <div class="row g-3 mb-4">
        <div class="col-md-3">
          <div class="card text-center p-3">
            <h4>25K</h4>
            <p>Today Views</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center p-3">
            <h4>220</h4>
            <p>Completed Tour</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center p-3">
            <h4>15K</h4>
            <p>Active Users</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center p-3">
            <h4>650K</h4>
            <p>Earning</p>
          </div>
        </div>
      </div>

      <div class="row">

        <!-- Table -->
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <h5>Country Campaigns</h5>

              <table class="table">
                <thead>
                  <tr>
                    <th>Location</th>
                    <th>Package</th>
                    <th>Type</th>
                    <th>Duration</th>
                    <th>Amount</th>
                    <th>Status</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>Khulna</td>
                    <td>Sundarbans</td>
                    <td>Group</td>
                    <td>3D 2N</td>
                    <td>35K</td>
                    <td><span class="badge bg-success">Active</span></td>
                  </tr>

                  <tr>
                    <td>Sylhet</td>
                    <td>Jaflong</td>
                    <td>Single</td>
                    <td>2D 1N</td>
                    <td>5K</td>
                    <td><span class="badge bg-secondary">Hold</span></td>
                  </tr>

                  <tr>
                    <td>North Bengal</td>
                    <td>Baishakhi</td>
                    <td>Group</td>
                    <td>5D 6N</td>
                    <td>35K</td>
                    <td><span class="badge bg-danger">Closed</span></td>
                  </tr>
                </tbody>

              </table>
            </div>
          </div>
        </div>

        <!-- Right Panel -->
        <div class="col-md-4">

          <div class="card mb-3">
            <div class="card-body">
              <h5>Latest Activity</h5>
              <p>12 Jan - New Booking</p>
              <p>22 Jan - Payment Received</p>
              <p>25 Jan - Tour Completed</p>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5>Social Media</h5>
              <p>Facebook: 12k</p>
              <p>YouTube: 10k</p>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</div>

</body>
</html>