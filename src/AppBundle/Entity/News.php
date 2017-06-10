<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsRepository")
 */
class News {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text")
     */
    private $texte;
    /**
     * @var string
     *
     * @ORM\Column(name="publication_date", type="datetime")
     */
    private $publication_date;
    function getPublication_date() {
        return $this->publication_date;
    }

    function setPublication_date($publication_date) {
        $this->publication_date = $publication_date;
    }

    /**
     * @var Author
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Author", inversedBy="news")
     */
    private $author;
    
    function getAuthor() {
        return $this->author;
    }

//    function setAuthor(Author $author) {
//        $this->author = $author;
//    }

        

        /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return News
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return News
     */
    public function setImage($image) {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return News
     */
    public function setTexte($texte) {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte() {
        return $this->texte;
    }

}
