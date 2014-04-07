<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <STYLE>
      tr { background-color: #FFFFFF}
      .initial { background-color: #FFFFFF;}
      .normal { background-color: #FFFFFF }
      .highlight { background-color: #8888FF }
    </style>    
</head>
<body>
<?php
include 'system/includes.php';

$values = array(
    "", "     ", "null", "NULL", null, 
    "true", true, "TRUE", "True", "on", "yes", "y", "Y", false, "false", "off", "no", "n", "N",
    "0", "1", "   1", "2", -1, 0, 1, 2, 1.5, 100, 10000, 100000000, "050", "1 1", "\n 1",
    "\n ", "\n\r 1", "\t 1", "<τιμη>", "/35", "10.10.10.10",
    "ΜΟΝΑΔΑ", "ΜΟ'.ΝΑ-ΔΑ", "ΜΟΝΑ.ΔΑ", "111!", "ΣΧΟΛΙΚΕΣ ΚΑΙ ΔΙΟΙΚΗΤΙΚΕΣ ΜΟΝΑΔΕΣ", "1ο ΔΗΜΟΤΙΚΟ",  
    "1,  2,  3,  4", "1,  2,  true,  'ΣΧΟΛΙΚΗ ΜΟΝΑΔΑ'", "Κώστας", "ώώώ,"
);

?>
    <table border="1">
        <tr>
            <th>Value</th>
            <th>IsBoolean</th>
            <th>IsNull</th>
            <th>IsArray</th>
            <th>IsID</th>
            <th>IsValue</th>
        </tr>   
<?php    
foreach($values as $value)
{
?>
    <tr onMouseOver="this.className='highlight'" onMouseOut="this.className='normal'">
        <td width="150"><?php var_dump( $value ) ?></td>
        <td align="center" style="color:<?php echo Validator::IsBoolean($value) ? "green" : "red" ?>">
            <?php echo Validator::IsBoolean($values) ? "&#10003;" : "&#10008" ?>
            <?php echo "<br>"; var_dump(Validator::ToBoolean($value)); ?>
        </td>
        <td align="center" style="color:<?php echo Validator::IsNull($value) ? "green" : "red" ?>">
            <?php echo Validator::IsNull($value) ? "&#10003;" : "&#10008"; ?>
            <?php echo "<br>"; var_dump(Validator::ToNull($value));  ?>
        </td>
        <td align="center" style="color:<?php echo Validator::IsArray($value) ? "green" : "red" ?>">
            <?php echo Validator::IsArray($value) ? "&#10003;" : "&#10008" ?>
            <?php echo "<br>"; var_dump(Validator::ToArray($value)); ?>
        </td>
        <td align="center" style="color:<?php echo Validator::IsID($value) ? "green" : "red" ?>">
            <?php echo Validator::IsID($value) ? "&#10003;" : "&#10008" ?>
            <?php echo "<br>"; var_dump(Validator::ToID($value)); ?>
        </td>
        <td align="center" style="color:<?php echo Validator::IsValue($value) ? "green" : "red" ?>">
            <?php echo Validator::IsValue($value) ? "&#10003;" : "&#10008" ?>
            <?php echo "<br>"; var_dump(Validator::ToValue($value)); ?>
        </td>
    </tr>
<?php
}
?>  
        </tr>
    </table>
</body>
</html>

    
