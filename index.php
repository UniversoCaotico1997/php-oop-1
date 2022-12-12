<?php
// Oggi pomeriggio ripassate i primi concetti di classe, 
// variabili e metodi d'istanza che abbiamo visto stamattina e 
// create un file index.php in cui:
// è definita una classe ‘Movie’
// all'interno della classe sono dichiarate delle variabili d'istanza
// all'interno della classe è definito un costruttore
// all'interno della classe è definito almeno un metodo
// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà


include __DIR__ . '/components/genre.php';
include __DIR__ . '/components/movie.php';

$Il_signore_degli_anelli = new Movie('Il signore delgi anelli', new Genre('Fantasy'), 'IT', 'IL giorno in cui tutto ebbe inizio');
var_dump($Il_signore_degli_anelli);

$El_camino = new Movie('El Camino', new Genre('Action'), 'EN', 'Tratto da una storia vera');
var_dump($El_camino);
