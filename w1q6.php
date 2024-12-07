 
<?php


$studentGrade = array (
                array ("Aarron", 74, 69, 70),
                array ("Jamie", 64, 79, 69),
                array ("Harry", 55, 52, 57));

echo "
<table>
    <tr>
        <td>Name</td>
        <td>Physics</td>
        <td>English</td>
        <td>Maths</td>
    </tr>

    <tr>
    <td>".$studentGrade[0][0]."</td>
    <td>".$studentGrade[0][1]."</td>
    <td>".$studentGrade[0][2]."</td>
    <td>".$studentGrade[0][3]."</td>
    </tr>

 <tr>
    <td>".$studentGrade[1][0]."</td>
    <td>".$studentGrade[1][1]."</td>
    <td>".$studentGrade[1][2]."</td>
    <td>".$studentGrade[1][3]."</td>
    </tr>

     <tr>
    <td>".$studentGrade[2][0]."</td>
    <td>".$studentGrade[2][1]."</td>
    <td>".$studentGrade[2][2]."</td>
    <td>".$studentGrade[2][3]."</td>
    </tr>
</table>";


echo $studentGrade[0][0]. " Physics grade is : " .$studentGrade[0][1]. "% <br>";
echo $studentGrade[1][0]. " English grade is : " .$studentGrade[0][2]. "%<br>";
echo $studentGrade[2][0]. " Math grade is : " .$studentGrade[0][3]. "%<br>";	
?>