<?php

$filmes = ['oIncrivelHulk', 'Vingadores','e a capitaMarvel'];
echo count($filmes);

echo "<br>Filmes<br>";

for($i = 0; $i < count($filmes); $i++){
    echo $filmes[$i] . "<br>";
}
