
<html>

<head>
<title>Multiplication table</title>
    <style type="text/css">
    
    td.white 
    {
        background-color: #fff;
    }
    
    td a 
    {
        display: block;
        text-decoration: none;
        
    }
    
    table, th, td 
    {
     border: 1px solid black;
     border-collapse: collapse;
     padding: 8px;
    }


    table.center 
    {
     margin-left: auto; 
     margin-right: auto;
    }

   
    </style>
</head>

<body>

    <table border="1" class="center" >
    <?php 
    for( $r = 1; $r < 11; $r++)
    {
    echo "<tr>";
        for( $c=1; $c<11; $c++)
        {
        
        echo "<td class='white' ><a href='#' style='color:black;' title='$r x $c = ". $r * $c . " ' >" . $r*$c . "</a></td>" ;
        }		
    echo  "</tr>";
    }        
    ?>
    </table>

</body>

</html>