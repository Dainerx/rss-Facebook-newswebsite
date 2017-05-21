<?php

/**
 * Created by PhpStorm.
 * User: dainer
 * Date: 28/04/17
 * Time: 02:18 م
 */
class Article
{
    private $id;
    private $id_cat;
    private $id_user;
    private $titre;
    private $contenu;
    private $date;
    private $image;

    /**
     * Article constructor.
     * @param $id_cat
     * @param $id_user
     * @param $titre
     * @param $contenu
     * @param $date
     * @param $image
     */
    public function __construct($id_cat, $id_user, $titre, $contenu, $date, $image)
    {
        $this->id_cat = $id_cat;
        $this->id_user = $id_user;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->date = $date;
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdCat()
    {
        return $this->id_cat;
    }

    /**
     * @param mixed $id_cat
     */
    public function setIdCat($id_cat)
    {
        $this->id_cat = $id_cat;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param mixed $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

}