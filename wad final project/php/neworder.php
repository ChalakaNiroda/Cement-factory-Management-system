<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- Bulma Version 0.9.0-->
  <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
  <link rel="stylesheet" href="css/admin.css">

</head>

<body class="myDIV">

  <!-- START NAV -->
  <nav class="navbar is-white">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item brand-text" href="../adminhome.html">
          Admin
        </a>
        <div class="navbar-burger burger" data-target="navMenu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div id="navMenu" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="../adminhome.html">
            Home
          </a>
          <a class="navbar-item" href="../oerderhome.html">
            Orders
          </a>
         
          <a class="navbar-item" href="../home.html">
            LOGOUT
          </a>

        </div>

      </div>
    </div>
  </nav>
  <!-- END NAV -->
  <div class="container">
    <div class="columns">
      <div class="column is-3 ">
        <aside class="menu is-hidden-mobile">
          <p class="menu-label">
            General
          </p>
          <ul class="menu-list">
            <li><a href="../oerderhome.html" class="is-active">ORDER</a></li>
            <li><a href="cusorder.php">Customers Orders</a></li> 
            <li><a >orders to factory</a>
              <ul><a href="vieworder.php">view order</a></ul>
            <ul><a href="neworder.php">new order</a></ul>
            </li>
          

            
         
          </ul>
         
          <ul class="menu-list">
            
           
          
        
          
            <li><a href="../home.html">  logout</a></li>
          </ul>
          
        </aside>
      </div>
      <div>
        <div class="container">
        <br><br><br>
            <div class="title">
                
                <h2>cement order to factory</h2>
            </div>
          <div class="d-flex">
            <form action="neworder1.php" method="post">
              <label>
                  <br><br><br>
                <span class="fname">Agent Email <span class="required">*</span></span>
                <input type="text" name="email">
              </label>
              <br><br>
              <label>
                <span class="lname">Quantity <span class="required">*</span></span>
                <input type="text" name="quantity">
              </label>
              <br><br>
              <label>
                <span>CEMENT TYPE <span class="required">*</span></span>
                <select name="type">
                <option value="pick"> select</option>
                <?php
        include "dbConn.php"; // Using database connection file here 
        $records = mysqli_query($db, "SELECT `cement_name` FROM `cement_detail`");  // Use select query here 
        $data=mysqli_num_rows($records);
      

        while($data = mysqli_fetch_array($records))
        {
          
           
            echo "<option value='". $data['cement_name'] ."'>" .$data['cement_name'] ."</option>";  // displaying data in option menu
        }	
    ?>  
                  
                </select>
              </label>
              <br><br>
              <div class='main-div'>
  <button  class='btn'>calculate</button>
</div>
            </form>
            <?php mysqli_close($db);  // close connection ?>
            
           </div>
          </div>
      </div>
    </div>
  </div>
  

</body>

</html>