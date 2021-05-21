<?php

namespace App\src\models;

class Location extends Entity
{
    /**
     * ID of location.
     *
     * @var int
     */
    private $id;

    /**
     * Title of location.
     *
     * @var string
     */
    private $title;

    /**
     * Name file of photo of location.
     *
     * @var string
     */
    private $photo;

    /**
     * Description of location.
     *
     * @var string
     */
    private $description;

    /**
     * Country where location.
     *
     * @var string
     */
    private $country;

    /**
     * Surface in m2 of location.
     *
     * @var int
     */
    private $surface;

    /**
     * Number of bedroom.
     *
     * @var int
     */
    private $bedroom_number;

    /**
     * Price of location in €uro.
     *
     * @var int
     */
    private $price;

    /**
     * Id of table category.
     *
     * @var int
     */
    private $category_id;

    /**
     * Id of table users.
     *
     * @var int
     */
    private $author_id;

    /**
     * Get iD of location.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iD of location.
     *
     * @param int $id ID of location
     *
     * @return self
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get title of location.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title of location.
     *
     * @param string $title title of location
     *
     * @return self
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Get name file of photo of location.
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set name file of photo of location.
     *
     * @param string $photo name file of photo of location
     *
     * @return self
     */
    public function setPhoto(string $photo)
    {
        $this->photo = $photo;
    }

    /**
     * Get description of location.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description of location.
     *
     * @param string $description description of location
     *
     * @return self
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Get country where location.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set country where location.
     *
     * @param string $country country where location
     *
     * @return self
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    /**
     * Get surface in m2 of location.
     *
     * @return int
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set surface in m2 of location.
     *
     * @param int $surface surface in m2 of location
     *
     * @return self
     */
    public function setSurface(int $surface)
    {
        $this->surface = $surface;
    }

    /**
     * Get number of bedroom.
     *
     * @return int
     */
    public function getBedroom_number()
    {
        return $this->bedroom_number;
    }

    /**
     * Set number of bedroom.
     *
     * @param int $bedroom_number number of bedroom
     *
     * @return self
     */
    public function setBedroom_number(int $bedroom_number)
    {
        $this->bedroom_number = $bedroom_number;
    }

    /**
     * Get price of location in €uro.
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set price of location in €uro.
     *
     * @param int $price price of location in €uro
     *
     * @return self
     */
    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    /**
     * Get id of table category.
     *
     * @return int
     */
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set id of table category.
     *
     * @param int $category_id id of table category
     *
     * @return self
     */
    public function setCategory_id(int $category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * Get id of table users.
     *
     * @return int
     */
    public function getAuthor_id()
    {
        return $this->author_id;
    }

    /**
     * Set id of table users.
     *
     * @param int $author_id id of table users
     *
     * @return self
     */
    public function setAuthor_id(int $author_id)
    {
        $this->author_id = $author_id;
    }
}
