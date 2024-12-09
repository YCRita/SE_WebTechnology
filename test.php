<?php

$n1="";
$n2="";
$result="";
$error ="";

    if(isset($_GET['operation'])){
        $n1 = $_GET['num1'];
        $n2 = $_GET['num2'];
        $op= $_GET['operation'];

        if(is_numeric($n1)&&is_numeric($n2)){
        
            switch($op){
                case 'addition':
                    $result = $n1 + $n2;
                break;

                case 'subtraction':
                    $result = $n1 - $n2;
                break;

                case 'multiply':
                    $result = $n1 * $n2;
                break;

                case 'division':
                    $result = $n1 / $n2;
                break;

            }
        }else{
            $error = "Please enter number !";
        }
    }
   
?>



<!DOCTYPE html>
<html>
    <body>

        <h1>The Simple Calculator</h1>
        <h1><?= $error ?></h1>
        <form action ="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            
            <!-- Number  1 -->
            <div>
                <label for ="num1">Number 1</label>
                <input type="number" name="num1" id="num1" value="<?= $n1 ?>">
            </div>

            <!-- Number 2 -->
            <div>
                <label for ="num2">Number 2</label>
                <input type="number" name="num2" id="num2" value="<?= $n2 ?>">
            </div>

            <!-- Result -->
            <div>
                <label for ="result">Result</label>
                <input type="number" id="result" value ="<?= $result ?>">
            </div>

            <!-- Operation -->

            <div>
                <input type="submit" value="addition" name="operation">
                <input type="submit" value="subtraction" name="operation">
                <input type="submit" value="multiply" name="operation">
                <input type="submit" value="division" name="operation">
            </div>

        </form>

</body>
</html>