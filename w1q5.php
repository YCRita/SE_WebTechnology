 
<?php

$summer = "July-Aug";
$winter = "Jan-Feb";
$temperture = array ("low_summer" =>11,"high_summer"=>19, "low_winter"=>1,"high_winter"=>7);
	

echo "
<table>
    <tr>Average Temperature in Edinburgh</tr>
    <tr>
        <th>Month</th>
        <th>high</th>
        <th>low</th>
    </tr>
    <tr>
        <td>$summer</td>
        <td>".$temperture['high_summer']."</td>
        <td>".$temperture['low_summer']."</td>
    </tr>
    
    <tr>
        <td>$winter</td>
        <td>".$temperture['high_winter']."</td>
        <td>".$temperture['low_winter']."</td>
    </tr>

</table>";

?>