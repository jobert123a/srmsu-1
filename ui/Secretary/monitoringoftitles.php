<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Student Research Monitoring System </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="table.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar" style="background-color:#202020;">
    <div class="logo-details">
        <div class="logo_name">SRMS</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list" >
      <li>
          <i class='bx bx-search' style="background-color:#FFFFFF; color:black;" ></i>
         <input type="text" placeholder="Search..." style="background-color:#FFFFFF; ">
         <span class="tooltip"style="background-color:#FFFFFF; ">Search</span>
      </li>
      <li>
        <a href="dashboard.php" style="background-color:#FFFFFF;">
          <i class='bx bx-grid-alt' style="color:black;"></i>
          <span class="links_name" style="color:black;" >Dashboard</span>
        </a>
         <span class="tooltip" >Dashboard</span>
      </li>
      <li>
       <a href="monitoringoftitles.php" style="background-color:#FFFFFF;">
         <i class='bx bx-user' style="color:black;"></i>
         <span class="links_name" style="color:black;">List of Titles</span>
       </a>
       <span class="tooltip">List of Titles</span>
     </li>
     <li>
       <a href="monitoringofresearchprogress.php" style="background-color:#FFFFFF;">
         <i class='bx bx-pie-chart-alt-2' style="color:black;" ></i>
         <span class="links_name" style="color:black;">Research Progress</span>
       </a>
       <span class="tooltip">Research Progress</span>
     </li>
     <li>
     <li class="profile" style="background-color:#202020;">
         <div class="profile-details">
           <div class="name_job">
             <div class="name">Astrid Gaile</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" style="background-color:#202020;" ></i>
     </li>
    </ul>
  </div>
  <section class="home-section" style="background-image: url('BG2.jpg');">
  <center><br><br>
      <img src="logo2.png" align="right" height="100px" width="100px">
      <img src="Logo.png" align="left" height="100px" width="100px">
      <h3>Republic of the Philippines</h3>
	    <h2>Laguna State Polytechnic University</h2>
	    <h4>Province of Laguna</h4>
      <h5>Bachelor of Science in Information Technology</h5>
    </center>
    <table>
           <caption>Statement Summary</caption>
           <thead>
               <tr>
                   <th scope="col">Account</th>
                   <th scope="col">Due Date</th>
                   <th scope="col">Amount</th>
                   <th scope="col">Period</th>
                   <th scope="col">CCS</th>
                   <th scope="col">Action</th>
               </tr>
           </thead>
           <tbody>
               <tr>
                   <td data-label="Account">Visa - 3412</td>
                   <td data-label="Due Date">04/01/2016</td>
                   <td data-label="Amount">$1,190</td>
                   <td data-label="Period">03/01/2016 - 03/31/2016</td>
                   <td data-label="CCS">03/01/2016 - 03/31/2016</td>
                   <td> <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   </td>
                   
           
                   
               </tr>
               <tr>
                   <td scope="row" data-label="Account">Visa - 6076</td>
                   <td data-label="Due Date">03/01/2016</td>
                   <td data-label="Amount">$2,443</td>
                   <td data-label="Period">02/01/2016 - 02/29/2016</td>
                   <td data-label="Period">03/01/2016 - 03/31/2016</td>
                   <td> <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   </td>
               </tr>
               <tr>
                   <td scope="row" data-label="Account">Corporate AMEX</td>
                   <td data-label="Due Date">03/01/2016</td>
                   <td data-label="Amount">$1,181</td>
                   <td data-label="Period">02/01/2016 - 02/29/2016</td>
                   <td data-label="Period">03/01/2016 - 03/31/2016</td>
                   <td> <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   </td>
               </tr>
               <tr>
                   <td scope="row" data-label="Acount">Visa - 3412</td>
                   <td data-label="Due Date">02/01/2016</td>
                   <td data-label="Amount">$842</td>
                   <td data-label="Period">01/01/2016 - 01/31/2016</td>
                   <td data-label="Period">03/01/2016 - 03/31/2016</td>
                   <td> <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   </td>
               </tr>
               <tr>
                   <td scope="row" data-label="Acount">Visa - 3412</td>
                   <td data-label="Due Date">02/01/2016</td>
                   <td data-label="Amount">$842</td>
                   <td data-label="Period">01/01/2016 - 01/31/2016</td>
                   <td data-label="Period">03/01/2016 - 03/31/2016</td>
                   <td> <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   <button style="font-size:10px" button style="padding:10px"> Button <i class="fa fa-table"></i> </button>
                   </td>
               </tr>
           </tbody>
       </table>
  <script src="script.js"></script>

</body>
</html>