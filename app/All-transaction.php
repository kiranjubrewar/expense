<html>
  <head>
    <script></script>
    <style type="text/css">
    h1{
      text-align :center;
    }
    table {
      boarder-collapse: collapse;
      width: 100%;
      color: #587;
      font-family: monospace;
      font-size: 25px;
      text-align: left;
    }
    th{
      background-color: #000;
      color: white;

     }
    tr:nth-child(even){
      background-color: #f2f2f2;

    }
    
    </style>
    
  </head>
  <body>
  <h1 style="color:skyblue">INCOME TABLE</h1>
   <table>
      <tr>
        <th>Amount</th>
        <th>Date</th>
        <th>Time</th>
        <th>Money</th>
        <th>Comment</th>
        <th>Work</th>
       </tr>
   

       <?php
       $conn = mysqli_connect("localhost","root","","db");
       if($conn-> connect_error){
         die("connection failed:".$conn-> connect_error);
       }

       $sql = "SELECT * from addincome";
       $result = $conn-> query($sql);

       if($result-> num_rows > 0){
         while($row = $result-> fetch_assoc()){
           echo "<tr><td>".$row["Amount"]."</td><td>".$row["Date"]."</td><td>".$row["Time"]."</td><td>".$row["Money"]."</td><td>".$row["Comment"]."</td><td>".$row["Work"]."</td></tr>";
         }
         echo "</table>";

       }
       else{
         echo "0result";
       }
       $conn->close();

      ?>


  </table>
  <h1 style="color:skyblue">EXPENSES TABLE</h1>

  <table>
      <tr>
        <th>Amount</th>
        <th>Date</th>
        <th>Time</th>
        <th>Money</th>
        <th>Comment</th>
        <th>category</th>
       </tr>
   

       <?php
       $conn = mysqli_connect("localhost","root","","db");
       if($conn-> connect_error){
         die("connection failed:".$conn-> connect_error);
       }

       $sql = "SELECT * from addexpenses";
       $result = $conn-> query($sql);

       if($result-> num_rows > 0){
         while($row = $result-> fetch_assoc()){
           echo "<tr><td>".$row["Amount"]."</td><td>".$row["Date"]."</td><td>".$row["Time"]."</td><td>".$row["Money"]."</td><td>".$row["Comment"]."</td><td>".$row["category"]."</td></tr>";
         }
         echo "</table>";

       }
       else{
         echo "0result";
       }

       $conn->close();

      ?>

    </table>

    
    
  </body>
</html>