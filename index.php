<?php
// Oggi pomeriggio ripassate i primi concetti di classe, 
// variabili e metodi d'istanza che abbiamo visto stamattina e 
// create un file index.php in cui:
// è definita una classe ‘Movie’
// all'interno della classe sono dichiarate delle variabili d'istanza
// all'interno della classe è definito un costruttore
// all'interno della classe è definito almeno un metodo
// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class Movie
{

    public $title;
    public $description;
    public $vote;
    public $lenguage;
    public $film_company;

    public function __construct($title, $description, $vote, $lenguage, $film_company)
    {
        $this->title = $title;
        $this->description = $description;
        $this->vote = $vote;
        $this->lenguage = $lenguage;
        $this->film_company = $film_company;
    }
}

$Il_signore_degli_anelli = new Movie('Il signore delgi anelli', 'Tutto ebbe inizio...', '5', 'IT', 'New Line Cinema');
var_dump($Il_signore_degli_anelli);
$El_camino = new Movie('El Camino', 'Tratto da una storia vera', '5', 'EN', 'Sony Pictures');
var_dump($El_camino);
