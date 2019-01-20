<?php  
 $connect = mysqli_connect("localhost", "root", "", "breakfast");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM dish WHERE dname LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["dname"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Food Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>