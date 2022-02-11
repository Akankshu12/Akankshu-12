<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">V-Canteen</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="index.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="users.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Users</span>
       </a>
       <span class="tooltip">Users</span>
     </li>
     <li>
       <a href="menu.php">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Menu</span>
       </a>
       <span class="tooltip">Menu</span>
     </li>
     <li>
       <a href="penorders.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Pending Orders</span>
       </a>
       <span class="tooltip">Pending Orders</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Order History</span>
       </a>
       <span class="tooltip">Order History</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Orders</span>
       </a>
       <span class="tooltip">Orders</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Saved</span>
       </a>
       <span class="tooltip">Saved</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Settings</span>
       </a>
       <span class="tooltip">Settings</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Yogesh Kulkarni</div>
             <div class="job">Web designer</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Users</div>
      <br>
      <br>
      <table class="users_table">
        <tr>
          <th>Sr.no</th>
          <th>Name</th>
          <th>Roll no.</th>
          <th>Mobile no.</th>
          <th>Email</th>
        </tr>
        <?php
          $conn = mysqli_connect("localhost","root","","canteen1");
          if($conn -> connect_error){
            die("Connection Failed".$conn->connect_error);
          }
          $sql = "SELECT id, name, roll_no, mobile_no, email FROM users";
          $result = $conn->query($sql);
          if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
              echo "<tr><td>". $row["id"]. "</td><td>". $row["name"]. "</td><td>". $row["roll_no"]. "</td><td>". $row["mobile_no"]. "</td><td>". $row["email"]. "</td><tr>";
            }
            echo "</table>";
          }
          else{
            echo "0 Result";
          }
          $conn->close();
        ?>
      </table>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>
