<?php

namespace App\OObject;

class Note
{
    private static int $noteCounter = 0;
    private array $notes = [];

    public function __construct(){
        self::$noteCounter++;
        echo 'Number of notes: ' .  self::$noteCounter . '</br>';
    }

    public function addNote(string|array $note): self
    {
        $this->notes[] = $note;
        echo 'Added note.'. '</br>';
        return $this;
    }

    public function getNotes(){
        return $this->notes;
    }

}