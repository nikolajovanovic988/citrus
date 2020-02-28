<?php

namespace Citrus\Repositories;

class Fruit
{
    private $image;

    private $title;

    private $description;

    public function __construct($image, $title, $description)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
    }

    public function getImage()
    {
        return  $this->image;
    }

    public function getTitle()
    {
        return  $this->title;
    }

    public function getDescription()
    {
        return  $this->description;
    }
}
