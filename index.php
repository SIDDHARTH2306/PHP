<span style="font-family: Georgia, 'Times New Roman', 'Bitstream Charter', Times, serif;font-size: small"><span style="line-height: 19px"> </span></span>
 <html>
 <body>
     <form name="frmdropdown" method="post" action="index.php">
     <center>
            <h2 align="center">Product Data</h2>
         
            <strong> Select Designation : </strong> 
            <select name="empName"> 
               <option value=""> -----------ALL----------- </option> 
            <?php
  				 require_once("dbcontroller.php");
	  			 $db_handle = new DBController();
                 $dd_res=mysqli_query($db_handle->connectDB(),"Select DISTINCT pname from product");
                 while($r=mysqli_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
              </select>
     <input type="submit" name="find" value="find"/> 
     <br><br>
  
   <table border="1">
 <tr align="center">
     <th>P_Name </th>      <th>P_Qty </th>     <th>P_Type</th>    <th>P_Price</th>    <th>Description</th>
 </tr> 
 
 <?php
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
         $des=$_POST["empName"]; 
         if($des=="")  // if ALL is selected in Dropdown box
         { 
             $res=mysqli_query($db_handle->connectDB(),"Select * from product");
         }
         else
         { 
             $res=mysqli_query($db_handle->connectDB(),"Select * from product where pname='".$des."'");
         }
  
         echo "<tr><td colspan='5'></td></tr>";
         while($r=mysqli_fetch_row($res))
         {
                 echo "<tr>";
                 echo "<td align='center'>$r[1]</td>";
                 echo "<td align='center' width='200'>$r[2]" . " </td>";
                 echo "<td align='center' width='40'> $r[3]</td>";
                 echo "<td align='center' width='200'>$r[4]</td>";
                 echo "<td width='100' align='center'>$r[5]</td>";
                 echo "</tr>";
        }
    }
?>
  </table>
 </center>
</form>
</body>
</html>