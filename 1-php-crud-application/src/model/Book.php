<?php

class Book {

    private string $id;
    private string $title;
    private string $author;
    private DateTime $publicationYear;
    private string $genre;

    public function __construct(string $id, string $title, string $author, DateTime $publicationYear, string $genre) {
        $this->id = $id;
        $this->title = $title;  
        $this->author = $author;
        $this->publicationYear = $publicationYear;
        $this->genre = $genre;
    }

    // getters
    public function getId() { return $this->id; }
    public function getTitle() { return $this->title; } 
    public function getAuthor() { return $this->author; }   
    public function getPublicationYear() { return $this->publicationYear; } 
    public function getGenre() { return $this->genre; } 

    // setters
    public function setId(string $id) { $this->id = $id; }
    public function setTitle(string $title) { $this->title = $title; }
    public function setAuthor(string $author) {    $this->author = $author;}
    public function setPublicationYear(DateTime $publicationYear) { $this->publicationYear = $publicationYear; }
    public function setGenre(string $genre) { $this->genre = $genre; }


}