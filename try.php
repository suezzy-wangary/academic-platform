

<?php





    $Server="localhost";
     $username="root";
     $psrd="";
     $dbname = "registration";
     $connection= mysqli_connect($Server,$username,$psrd,$dbname);

    $query="select * from Notification";
    $Result=mysqli_query($connection,$query);
    if(mysqli_num_rows($Result)>0){
   $not=mysqli_num_rows($Result);
echo "<script> alert('Your Have No New Notification'); </script>";
     echo'<table class="data-table">
 <thead>
     <tr>

       <th>Name</th>

       <th>Message</th>
       <th>Reply</th>
       <th>Delete</th>

    </tr>
  </thead>

<tbody>';

   while ($row=mysqli_fetch_array($Result))
    {
          echo "<tr>";

          echo "<td>";
          echo $row['UserName'];
          echo "</td>";

          echo "<td>";
          echo $row['Message'];
          echo "</td>";
            echo "<td>";
            $email=$row[1];
            $name=$row[0];
         echo"<a href=javascript:reply('$name')> <img src='Image/reply.jpg'  width='50px' height='50px' alt='Bid'/> </a>";
          echo "</td>";

           echo "<td>";
            $email=$row[1];
         echo"<a href=javascript:del('$email')> <img src='Image/Delete.jpg'  width='50px' height='50px' alt='Bid'/> </a>";
          echo "</td>";


    }
  }
  else
  {
    echo "<script> alert('You have no new notification'); </script>";
  }
?>
