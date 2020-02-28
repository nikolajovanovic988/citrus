<?php

namespace Citrus\Repositories;

class Comments
{
    private $name;

    private $email;

    private $text;

    private $approved;

    public function __construct($name, $email, $text, $approved)
    {
        $this->name = $name;
        $this->email = $email;
        $this->text = $text;
        $this->approved = $approved;
    }

    public function getName()
    {
        return  $this->name;
    }

    public function getEmail()
    {
        return  $this->email;
    }

    public function getText()
    {
        return  $this->text;
    }

    public function getApproved()
    {
        return  $this->approved;
    }
}
