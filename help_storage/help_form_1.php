<?php
if(isset($_POST['word'], $_POST['number'])){

    $word = $_POST['word'];
    $number = $_POST['number'];
    $chunks = ceil(strlen($word) / $number);
    
    echo "Блок размером {$number} символов слова '{$word}' : </br>";
    
    for ($i = 0; $i < $chunks; $i++) {
        $chunk = substr($word, $i * $number, $number);
        printf("%d: %s<br/>\n", $i + 1, $chunk);
    }
}
