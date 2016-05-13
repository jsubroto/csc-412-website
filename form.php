<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/ico" href="favicon.ico"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="site.css">
        <script src="script.js"></script>
        <title>SQL Form</title>
    </head>
<body background="background.jpg">
<div id="wrap">
  
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.html"><img src="http://www.lifeatsfstate.com/wp-content/uploads/2014/05/San-Francisco-State-logo_full.jpg" style="width:105px;height:30px;"></a></li>
          <li><a href="about.html">Contact</a></li>
          <li class="dropdown">
          <a href="javascript:void(0)" onMouseOver="this.style.color='#CB9A2C'" onMouseOut="this.style.color='white'" class="dropbtn" onclick="myFunction()">PHP</a>
          <div class="dropdown-content" id="myDropdown">
            <a href="form.php">Form</a>
            <a href="data.php">Table</a>
          </div>
        </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  
  <!-- Begin page content -->
  <div class="container">
    <div class="page-header">
      <h1>Submission Form</h1>
    </div>
    <form action="process.php" method="post">
        <p>Quote: <input type="text" name ="quote"/></p>
        <p>Name: <input type="text" name ="name"/></p>
        <input type="submit" value ="Submit"/>
    </form>
    </div>
</div>
<div id="footer">
  <div class="container">
      <p class="text-muted credit"><span id="white">SFSU CSC 412 Project | Spring 2016</span></p>
  </div>
</div>