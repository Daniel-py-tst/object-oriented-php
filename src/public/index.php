<?php

require __DIR__ . '/../vendor/autoload.php'; 

use App\OObject\Note;

$noteInstance = new Note;
$noteInstance->addNote(
    [
        'Aspects of OOP' => ["Encapsulation","Abstraction","Polymorphism","Inheritance"]
    ]
);
$noteInstance->addNote('hello');

$noteInstance->addNote('hello1');
$noteInstance->addNote('hello2');

echo '<pre>';
print_r($noteInstance->getNotes());
echo '</pre>';


