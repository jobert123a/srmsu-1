<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Student Research Monitoring System </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="table.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- data table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <style>
    .btn {
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: right;
      text-decoration: none;
      font-size: 11px;
      margin: 40px 200px;
      cursor: pointer;
      margin-right: 1000px;
    }

    .success {
      background-color: #04AA6D;
    }

    /* Green */
    .success:hover {
      background-color: #46a049;
    }

    .button {
      width: 70px;
      height: 45px;
      cursor: pointer;
      border-radius: 10px;
      border: 0;
      color: white;
      font-size: 12px
    }

    .btn-danger {
      background-color: #C82333;
    }

    .btn-info {
      background-color: #138496;
    }

    .btn-success {
      background-color: #218838;
    }

    .btn-add {
      width: 150px;
      height: 45px;
      cursor: pointer;
      border-radius: 10px;
      border: 0;
      color: white;
      font-size: 12px
    }

    #log_out {
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="sidebar" style="background-color:#202020;">
    <div class="logo-details">
      <div class="logo_name">SRMS</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <i class='bx bx-search' style="background-color:#FFFFFF; color:black;"></i>
        <input type="text" placeholder="Search..." style="background-color:#FFFFFF; ">
        <span class="tooltip" style="background-color:#FFFFFF; ">Search</span>
      </li>
      <li>
        <a href="index.php" style="background-color:#FFFFFF;">
          <i class='bx bx-grid-alt' style="color:black;"></i>
          <span class="links_name" style="color:black;">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="addnewusers.php" style="background-color:#FFFFFF;">
          <i class='bx bx-user' style="color:black;"></i>
          <span class="links_name" style="color:black;">Add New Users</span>
        </a>
        <span class="tooltip">Add New Users</span>
      </li>
      <li>
        <a href="viewgroup.php" style="background-color:#FFFFFF;">
          <i class='bx bx-pie-chart-alt-2' style="color:black;"></i>
          <span class="links_name" style="color:black;">View Groups</span>
        </a>
        <span class="tooltip">View Groups</span>
      </li>
      <li>
        <a href="logs.php" style="background-color:#FFFFFF;">
        <i class='bx bx-book-bookmark'  style="color:black;"></i>
          <span class="links_name" style="color:black;">Logs</span>
        </a>
        <span class="tooltip">Logs</span>
      </li>
      <li class="profile" style="background-color:#e48203;">
        <div class="profile-details">
          <div class="name_job">
            <div class="name">Astrid Gaile</div>
            <div class="job">Admin</div>
          </div>
        </div>
        <i class='bx bx-log-out' id="log_out" type="button" data-toggle="modal" data-target="#exampleModal" style="background-color:#e48203;"></i>
      </li>
    </ul>
  </div>


  <!-- LOGOUT MODAL -->
  <!-- Modal -->
  <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure you want to logout?
        </div>
        <div class="modal-footer" style="height: 95px;">
          <button type="button" class="btn btn-danger">Yes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <!-- ito ay wala lang, kasi ayaw lumabas ng modal jan lang yan -->
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <section class="home-section" style="background-image: url('BG2.jpg'); ">
    <center style=" height:160px;">
      <br>
      <img src="logo2.png" align="right" style="margin-right: 40px;" height="100px" width="100px">
      <img src="Logo.png" align="left" style="margin-left: 40px;" height="100px" width="100px">
      <h5>Republic of the Philippines</h3>
        <h4><b>Laguna State Polytechnic University</b> </h4>
        <h5>Province of Laguna</h5>
        <h6>College of Computer Studies</h6>
    </center>

    
    <br>
    <br>


    <div class="row w-100">
      <div class="col-md-10 offset-1 " style="background-color: white; border-radius:20px; padding:30px;">
        <table id="example" class="table table-striped table-bordered" style="background-color: white; width:100%;">




          <div class="d-flex justify-content-center">
            <h4 align="center">Group List</h4>

          </div>


          <br>
          <thead>
            <tr>
              <th scope="col" class="text-center">Group Code</th>
              <th scope="col" class="text-center">Group Title</th>
              <th scope="col" class="text-center">Members</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Account">Visa - 3412</td>
              <td data-label="Due Date">04/01/2016</td>
              <td data-label="Amount">$1,190</td>

            </tr>
            <tr>
              <td scope="row" data-label="Account">Visa - 6076</td>
              <td data-label="Due Date">03/01/2016</td>
              <td data-label="Amount">$2,443</td>

            </tr>
            <tr>
              <td scope="row" data-label="Account">Corporate AMEX</td>
              <td data-label="Due Date">03/01/2016</td>
              <td data-label="Amount">$1,181</td>

            </tr>
            <tr>
              <td scope="row" data-label="Acount">Visa - 3412</td>
              <td data-label="Due Date">02/01/2016</td>
              <td data-label="Amount">$842</td>


            </tr>
          </tbody>

        </table>
      </div>
    </div>








  </section>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- data table -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
  <script src="script.js"></script>

</body>

</html>