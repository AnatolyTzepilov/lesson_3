<?php
$a = rand(a, 100);
$b = rand(b, 100);

echo "$a + $b " . $a + $b
?>



<?php
function generateRandomString($length = 10):string {
    $characters = "abcdefghijklmnopqstuvwxyzABSDEFGHIJKLMNOPQSTUVWXYZ";
    $charactersLength = strlen($characters);
    $randomString .= "";
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$str_one = generateRandomString(); //"qwe"
$str_two = generateRandomString(); //"ewq"

echo "$str_one + $str_two = " . $str_one . $str_two;
?>


$dog = "Шарик";