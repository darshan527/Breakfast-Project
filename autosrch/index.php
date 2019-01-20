

<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Healthy food</title> 
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
             
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
 
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Find Nutrition values</h3><br />  
                <label>Enter food Name</label> 
                
               <form method="GET">
                <input type="text" name="food" id="food" class="form-control" placeholder="Enter food Name" />  
                <div id="foodList"></div>  
                <input type="SUBMIT" name="submit" value="Submit" formaction='http://localhost/autosrch/fetch.php?key='+food />
                </form>

           </div>
      </body>  
 </html>
 <script>  
 $(document).ready(function(){  
      $('#food').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#foodList').fadeIn();  
                          $('#foodList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#food').val($(this).text());  
           $('#foodList').fadeOut();  
      });  
 });  
 </script> 

