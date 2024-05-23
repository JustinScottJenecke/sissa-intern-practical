<?php
declare(strict_types=1);

class Book {

    private $id;
    private $title;
    private $author;
    private $publicationYear;
    private $genre;

    public function __construct() {}

    // getters
    public function getId() { return $this->id; }
    public function getTitle() { return $this->title; } 
    public function getAuthor() { return $this->author; }   
    public function getPublicationYear() { return $this->publicationYear; } 
    public function getGenre() { return $this->genre; } 

    // setters
    public function setId($id) { $this->id = $id; }
    public function setTitle($title) { $this->title = $title; }
    public function setAuthor($author) {    $this->author = $author;}
    public function setPublicationYear($publicationYear) { $this->publicationYear = $publicationYear; }
    public function setGenre($genre) { $this->genre = $genre; }


}