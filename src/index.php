<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <table id='one'>
        <tr>
     <td>Location = "Kolkata"</td>
     <td>Location = "Delhi" </td>
     <td>Location  = "Mumbai"</td>
</tr>
<tr>
   <td>Item</td> 
   <td>Item</td>
   <td>Item</td>
</tr>
<tr>

    <td>Time Milk Egg Bread</td>
    <td>Milk Egg Bread</td>
    <td>Milk Egg Bread</td>
   
</tr>
</table>



    <?php 
    $location = array(
        array(
        array( "location"=> "kolkata",
       
            "quarter" => "q1",
           
            "Milk" => "340",
            "Egg" => "604",
            "Bread" => "38"
        ),
           array("location" =>"delhi",
          "quarter" => "q1",

                "Milk" => "335",
                "Egg" => "365",
                "Bread" => "35" 
            ),
    array("location" =>"mumbai",
        "quarter" => "q1",
                "Milk" => "336",
                "Egg" => "484",
                "Bread" => "80" 
            )
        ),
            
            array (
            array( "location"=> "kolkata",
       
            "quarter" => "q2",
           
            "Milk" => "680",
            "Egg" => "583",
            "Bread" => "10"
            ),
           array("location" =>"delhi",
          "quarter" => "q2",

                "Milk" => "684",
                "Egg" => "490",
                "Bread" => "48" 
        ),
        
    array("location" =>"mumbai",
        "quarter" => "q2",
                "Milk" => "595",
                "Egg" => "594",
                "Bread" => "39" 
            )
            ),


   
            
         array(
            
            array( "location"=> "kolkata",
       
            "quarter" => "q3",
           
            "Milk" => "535",
            "Egg" => "490",
            "Bread" => "50"
         ),
           array("location" =>"delhi",
          "quarter" => "q3",

                "Milk" => "389",
                "Egg" => "385",
                "Bread" => "15" 
            ),
    array("location" =>"mumbai",
        "quarter" => "q3",
                "Milk" => "336",
                "Egg" => "385",
                "Bread" => "20" 
            )
         
            ),
                
        );
   
            echo "<table border='1px' style = 'width: 32%;%'>";
            echo "<tr>";
            foreach($location as $k =>$v)
            {
            //    print_r($v);
          print_r("<tr><td>".$v[0]["quarter"]."</td><td>" .$v[0]["Milk"]. "</td><td>" .$v[0]["Egg"]. "</td><td>" .$v[0]["Bread"]. "</td>");
          print_r("<td>" .$v[1]["Milk"]. "</td><td>" .$v[1]["Egg"]. "</td><td>" .$v[1]["Bread"]. "</td>");  
          print_r("<td>" .$v[2]["Milk"]. "</td><td>" .$v[2]["Egg"]. "</td><td>" .$v[2]["Bread"]. "</td></tr>");             
          // echo $k2;
      
            }
            echo "</table>";
            echo "<br>";

            foreach($location as $k =>$v)
            {
                $m1 += $v[0]["Egg"];
                $m2 += $v[1]["Egg"];
                $m3 += $v[2]["Egg"];
                
              
            
            }
            
            // echo "".$m1 .$m2 .$m3. "";
            $ans1=(max($m1,$m2,$m3) . "<br>");
            echo "<h3>   Quarter with maximum sale of Egg  is in quarter2 = ".$ans1."  </h3>";
         

            foreach($location as $k =>$v )
          {
            $m4 += $v[0]["Milk"];
            $m5 += $v[1]["Milk"];
            $m6 += $v[2]["Milk"];
          
          }
          $ans2 =  (min($m4,$m5,$m6) ."" );
          if($ans2 == $m4)
          {
            echo "<h3>minimum consumption of Milk is in location kolkata  ".$ans2."</h3>";
          }
          else if($ans2 == $m5)
          {
            echo "<h3>minimum consumption of Milk is in location delhi ".$ans2." </h3>";
          }
          elseif ($ans2 == $m6)
          {
            echo "<h3>minimum consumption of Milk is in location mumbai ".$ans2." </h3>";
          }
        


          foreach($location as $k => $v)
          {
            $m7 += $v[0]["Bread"];
            $m8 += $v[1]["Bread"];
            $m9 += $v[2]["Bread"];
          
          }
          $ans = (min($m7,$m8,$m9));
          foreach($location as $k => $v){

          
          if($ans == $m9){
            array_splice($location[$k],2,1);
          }if($ans == $m8){
            array_splice($location[$k],1,1);
          }if($ans == $m7){
            array_splice($location[$k],0,1);
          }
        }
           
            echo "<table border='1px' style='width: 27%;'>";
            foreach($location as $k =>$v)
            {
                print_r("<tr><td>".$v[0]["quarter"]."</td><td>" .$v[0]["Milk"]. "</td><td>" .$v[0]["Egg"]. "</td><td>" .$v[0]["Bread"]. "</td>");
            }
            echo "<h3>Deleted location with Minimum sale of Bread and  shown data of mumbai only </h3>";
            
   echo "</tr>";



    ?>
</body>
</html>