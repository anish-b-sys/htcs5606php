
<?php
class Category
{
    public $id;
    public $name;
    public $picture;

    /**
     * Category constructor.
     * @param $id
     * @param $name
     * @param $picture
     */
    public function __construct($id, $name, $picture)
    {
        $this->id = $id;
        $this->name = $name;
        $this->picture = $picture;
    }
}