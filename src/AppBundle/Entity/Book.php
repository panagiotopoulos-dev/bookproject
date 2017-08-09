<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="book")
 */

class Book {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */    
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=64)
     */    
    protected $name;

    /**
     * @ORM\Column(type="string", length=64)
     */   
    protected $releaseDate;

    /**
     * @ORM\Column(type="integer")
     */       
    protected $length;
    
    /**
     * @ORM\ManyToMany(targetEntity="Genre", inversedBy="book")
     */
    protected $genres;
    
    public function __construct() {
        $this->genres = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getReleaseDate() {
        return $this->releaseDate;
    }

    function getLength() {
        return $this->length;
    }

    function getGenres() {
        return $this->genres;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setReleaseDate($releaseDate) {
        $this->releaseDate = $releaseDate;
    }

    function setLength($length) {
        $this->length = $length;
    }

    function setGenres($genres) {
        $this->genres = $genres;
    }


    
}
