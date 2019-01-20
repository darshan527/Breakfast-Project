 <html>  
      <head>  
           <title>Healthy food</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <style>  
           ul{  
                background-color:#eee;  
                cursor:pointer;  
           }  
           li{  
                padding:12px;  
           }  
           </style>  
      </head>
     <body>
         <br /><br /><br /><br />
         <h2 align="center">Nutritional Values.</h2>
         <p align="center">Serving size is 100g and Units is in gram and Kcal.</p>
         
         
<table align="center" border="2">
  <thead>
    <tr>
      <th>Dish Name</th>
      <th>Proteins</th>
      <th>Carbs</th>
      <th>Fats</th>
      <th>Calories</th>
      <th>Recommend</th>
    </tr>
  </thead>
  <tbody>
<?php
    $key=$_GET['food'];
    $array = array();
    $con=mysqli_connect("localhost","root","","breakfast");
    $query=mysqli_query($con, "select * from dish where dname='{$key}'");
    while($row=mysqli_fetch_assoc($query))
    {
      echo "<td>";
      echo ($row['dname']);
      echo "<td>";
      echo ($row['protein']);
      echo "<td>";
      echo ($row['carbs']);
      echo "<td>";
      echo ($row['fat']);
      echo "<td>";
      echo ($row['calories']);
      echo "<td>";
        if($row['calories']>300){
            echo "NO";
        }
        else{
            echo "YES";
        }
    }
    mysqli_close($con);
?>
</tbody>
</table> 
          <br />
           <div class="container" style="width:500px;" align="center">
                 
                <form>
                <input type="SUBMIT" name="back" value="Go Back" formaction='http://localhost/autosrch/index.php' />
                </form>
                Maximum calories for Healthy breakfast is 300Kcal
               <h2>Maximum Daily Allowance</h2>
               <img src="daily.jpg" alt="daily allowance">
           </div>
</body>
</html>