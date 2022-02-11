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
    <style>
        .addform{
            margin-left: 30%;
            margin-top: 140px;
            border: 1px solid #009879;
            padding: 20px;
            width: 450px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .addform button{
            padding: 10px;
            width: 100px;
            border-radius: 25px;
            border: 1px solid white;
            background-color: #009879;
            color: white;
            cursor: pointer;
        }
        .addform input{
            margin-bottom: 30px;
            padding: 12px;
            border-radius: 20px;
            border: 1px solid white;
            text-decoration: none;
            outline: none;
            text-align: center;
            margin-left: 10px;
            color: #009879;
        }
    </style>
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
      <div class="text">Delete Item</div>
      <form action="dbh2.php" method="POST" class="addform">
          <label>Item Out of Stock:</label>
          <input type="text" placeholder="Enter item to be deleted" name="item_name"><br>
          <button>Submit</button>
      </form>
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
