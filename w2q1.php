<?php


function replaceVowelsWithX($toReplace){
    $vowels = array ('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    return str_replace($vowels,'x',$toReplace);
}
$str1 = "Hello World!";
$newStr = replaceVowelsWithX($str1);

echo "$str1<br>";
echo "$newStr";

?>