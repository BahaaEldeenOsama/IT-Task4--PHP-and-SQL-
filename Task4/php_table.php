<html>
<head>

    <title>Task4-20170078</title>
    
    <style>
    table, th, td {
     border: 1px solid black;
    border-collapse: collapse;
    }
    th, td {
    padding: 15px;
    text-align: left;
    }
    table.center {
     margin-left: auto; 
     margin-right: auto;
   }

    </style>


</head>

<body>

    <?php
         $values2= array(
          array('name'=>'john','age'=>'24','salary'=>'4000'),
          array('name'=>'robert','age'=>'27','salary'=>'3500'),
          array('name'=>'queen','age'=>'20','salary'=>'4500'),
          array('name'=>'jenny','age'=>'22','salary'=>'3000'));

          $values= array(
               array('john','24','4000'),
               array('robert','27','3500'),
               array('queen','20','4500'),
               array('jenny','22','3000'));
          ?>
         

       
    <table style="width:50%" class="center" >
    <tr>
         <th>Name</th>
         <th>Age</th> 
         <th>Salary</th>
    </tr>
    <?php
          for($i=0;$i<4;++$i)
          {
               echo'<tr>';
               for($j=0;$j<3;++$j)
               {
                    echo '<td>'.$values[$i][$j].'</td>';
               }
               echo'</tr>';
          }
    ?>

            
</table>

</body>
</html>


