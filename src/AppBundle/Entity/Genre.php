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
 * @ORM\Table(name="genre")
 */

class Genre {
     
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
     * @ORM\ManyToMany(targetEntity="Book", mappedBy="genre")
     */    
    protected $books;
    
     public function __construct() {
        $this->books = new \Doctrine\Common\Collections\ArrayCollection();
    }    
    
}
