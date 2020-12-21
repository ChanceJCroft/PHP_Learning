<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title>PHP Basics at Treehouse</title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <div id="wrap">
        <section class="sidebar text-center">
          <div class="avatar">
            <img src="img/logo.png" alt="Alt For Image">
          </div>
          <h1>Name</h1>
          <p>Contact:<br />
          <a href="mailto:">EMAIL</a></p>
          <hr />
          <ul class="social">
            <li><a href=""><span class="icon twitter"></span></a></li>
          </ul>
          <hr />
          <p>Today: D, d M Y</p>
        </section>
        <section class="main">
          <h1>My First PHP Page</h1>
    
          <h2>Unit Conversion</h2>
            <?php include 'inc/units.php'; ?>
          <hr />
    
          <h2>Daily Exercise</h2>
            <?php include 'inc/exercie.php'; ?> 
        </section>
    </div>
    <section class="footer text-center">
      &copy; <?php echo date('Y') ?> Treehouse Island, Inc.
    </section>
  </body>
</html>