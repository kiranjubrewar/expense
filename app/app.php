<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>bootstrap demo</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
        .fa-facebook {
          background: #3B5998;
          height: 25px;
          width: 25px;
         color: white;
        }
        .fa-twitter {
           background: #55ACEE;
           color: white;
           height: 25px;
          width: 25px;
         }
         .fa-google {
           background: #dd4b39;
           color: white;
           height: 25px;
          width: 25px;
          }
          .fa-instagram {
            background: #125688;
             color: white;
             height: 25px;
          width: 25px;
          }
          #piechart_3d{
            
          }
            #carouselExampleCaptions{
                background-color: black;
                
                width: 100%;
            
            }
            body{
                background-color: white;
            }

            footer{
              background-color: skyblue;
              margin-top: 50px;
              margin-left: 10px;
              margin-right: 10px;
              margin-bottom: 10px;

            } 
        </style>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <script type="text/javascript">
     /* google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['income',     1],
          ['expenses',      2],
          ['balance',  2],
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }*/
      
 </script>
</head>

<body>

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
       <img src="240_F_326428531_NztOJVIJIUN6M6yMZtDn43kvswN3jJvx.jpg" width="30" height="30" style="text-color:red" class="d-inline-block align-top" alt="save-money" id="imgcheckandchange" onclick="home()">
       SaveMoney
    </a>

    <div class="navbar-nav">
      <a href="login.php" class="nav-item nav-link">Login</a>
    </div> 
</nav>
<!--<div class="container">
  <div id="piechart_3d" style="center width: 400px; height: 400px;">

  </div>
     
</div>-->
<hr/>

<div class="container">
  <div class="row align-items-start">
    <div class="col">
      <h5>Main balanace: 00$</h5> 
    </div>
     <div class="col">
      <h5>Income:00$</h5>
     </div>
      <div class="col">
        <h5>Expenses:00$ </h5>    
      </div>
  </div>
</div>

       
       <hr/>

<div class="container">
       <div class="row">
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <a href="Add-income.php">   <img src="240_F_204828797_mGWtxIqMSbdRF27GSraOhsR9LCp2y30b.jpg"  alt="add income" width="200"height="80" id="add-money" onclick="add()"></a>

              <h5 class="card-title">Add-income</h5>
              <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>-->
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <a href="Add-expenses.php"> <img src="240_F_304051050_QNAQbFIKZk1eLLNuSmbyAtCvg91xnUv4.jpg" alt="add Expenses" width="200"height="80"></a>

              <h5 class="card-title">Add-expenses</h5>
              <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>-->
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <a href="Reports.php" >  <img src="240_F_307254609_3JMsfMLbsGRAdDkr1vCQUlQuX7hDtK1m.jpg" alt="Reports" width="200"height="80"></a>

              <h5 class="card-title">Reports</h5>
             <!--- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>-->
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <a href="All-transaction.php">  <img src="240_F_209861750_nj9LnTcDbDIVOkJg7EiE6E9fZ7U31Sjf.jpg" alt="All Transaction" width="200"height="80"></a>

              <h5 class="card-title">Transcation</h5>
             <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>-->
            </div>
          </div>
        </div>
    </div>
</div>      
      
  <!--    

<div class="container">
  <div class="row">
    <div class="col" >
         <a href="Add-income.html">   <img src="240_F_204828797_mGWtxIqMSbdRF27GSraOhsR9LCp2y30b.jpg"  alt="add income" width="200"height="80" id="add-money" onclick="add()"></a>
            <p>add-income</p>
  


    </div>

      <div class="col">
           <a href="Add-expenses.html"> <img src="240_F_304051050_QNAQbFIKZk1eLLNuSmbyAtCvg91xnUv4.jpg" alt="add Expenses" width="200"height="80"></a>
            <p>add Expenses</p>

      </div>
          
      <div class="col">
           <a href="Reports.html" >  <img src="240_F_307254609_3JMsfMLbsGRAdDkr1vCQUlQuX7hDtK1m.jpg" alt="Reports" width="200"height="80"></a>
            <p>Reports</p>

      </div>
      <div class="col">
          <a href="All-transaction.html">  <img src="240_F_209861750_nj9LnTcDbDIVOkJg7EiE6E9fZ7U31Sjf.jpg" alt="All Transaction" width="200"height="80"></a>
            <p>All Transaction</p>

              
      </div>

  </div>
</div>  -->
      
      
<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-3 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">Expense Management System </h5>
        <p>“Money is usually attracted, not pursued.”</p>
        <p>“If we command our wealth, we shall be rich and free. If our wealth commands us, we are poor indeed.” </p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#!">PROJECTS</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">ABOUT US</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">BLOG</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">AWARDS</a>
            </p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>
        <address>
    You can contact author at <a hre="http://www.AIsha.com/contact">
    www.AIsha.com</a>.<br>
    If you see any bugs, please <a href="mailto:kiranjubre@gmail.com.com">
    contact webmaster</a>.<br>
    You may also want to visit us:<br>
    AIsha Foundation,<br>
    Hyderabad, <br>
    dilsuknagar, 500060,<br>
    Telangana.
  </address>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

        <!-- Facebook -->

        
          <a href="#" class="fa fa-facebook"></a>
        
        <!-- Twitter -->
        <a href="#" class="fa fa-twitter"></a>
        
        <!-- Google -->
        <a href="#" class="fa fa-google"></a>
        <!-- instagram -->
        <a href="#" class="fa fa-instagram"></a>
      

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->

  <hr/>
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="mailto:kiranjubre123@gmail.com.com"> jubre kiran</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
               
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        
    </script>
    </body>
</html>