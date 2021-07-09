<?php

echo PHP_EOL . '==========================' . PHP_EOL;
echo '======= Угадай число =====' . PHP_EOL;
echo '==========================' . PHP_EOL . PHP_EOL;

$number = rand(0, 100);

while (true) {
    $userOption = readline('Какое число загадал компьютер? ');

    if ($userOption == $number) {
        echo 'Вы выиграли!' . PHP_EOL;
        break;
    }

    if ($userOption > $number) {
        echo 'Загаданное число меньше вашего.' . PHP_EOL;
    }

    if ($userOption < $number) {
        echo 'Загаданное число больше вашего.' . PHP_EOL;
    }
}
