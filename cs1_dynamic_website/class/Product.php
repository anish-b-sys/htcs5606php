<?php


class Product
{
    public $id;
    public $name;
    public $price;
    public $picture;
    public $description;
    public $categoryID;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $price
     * @param $description
     * @param $categoryID
     */
    public function __construct($id, $name, $price, $picture, $description, $categoryID)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->picture = $picture;
        $this->description = $description;
        $this->categoryID = $categoryID;
    }


}