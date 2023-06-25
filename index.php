<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
            <table>
        <thead>
            <tr>
            <th>SN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            
    <?php
include 'connection.php';





if(isset($_GET["page"])){
    $page=$_GET["page"];
}
else{
    $page=1;
}
$num_per_page=100;
$start_from=($page-1)*50;

$sql="SELECT * FROM `tblclients`,`tblcontacts` limit $start_from,$num_per_page";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);



if($num>0){
while($row=mysqli_fetch_assoc($result)){

    echo "<tr>";
                        echo "<td>".$row["sno"]."</td>";
                     echo "<td>".$row["firstname"]." ". $row["lastname"]."</td>";
                     echo "<td>".$row["email"]."</td>";
                    echo "<td>".$row["phonenumber"]."</td>";
                    echo "<td>".$row["address"]."</td>";
    echo "</tr>";
}
}

else {
         echo "<tr><td colspan='4'>No data found</td></tr>";
            }

            
            $conn->close();
            
            ?>
                    </tbody>
    </table>
    
<br/>



<?php
echo "<div class='cnter'>";
if($page>1){
    echo "<a href='index.php?page=".($page-1)."'><button>Previous</button></a>";
}
$total_pages = ceil($num / $num_per_page);
for ($i = 1; $i <= 10; $i++) {
  
}

if($i>$page){
    echo "<a href='index.php?page=".($page+1)."'><button>Next</button></a>";
}

echo "</div>";

?>












  
</body>
</html>















