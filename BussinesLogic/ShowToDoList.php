<?php
/* 
    Menampilkan Todo di List
*/
function showToDoList()
{
    global $todoList;

    echo "TODOLIST Rumah Sakit" . PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number . $value" . PHP_EOL;
    }
 }
