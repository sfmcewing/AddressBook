<?php
class Contact
{
    private $name;
    private $number;
    private $address;

    function __construct($name, $number, $address)
    {
        $this->name = $name;
        $this->number = $number;
        $this->address = $address;
    }

 //setters

    function setName($new_name)
    {
        $this->name = (string) $new_name;
    }

    function setNumber($new_number)
    {
        $this->name = $new_number;
    }

    function setAddress($new_address)
    {
        $this-> = $new_address;
    }

 //getters
    function getName()
    {
        return $this->name;
    }

    function getNumber()
    {
        return $this->number;
    }

    function getAddress()
    {
        return $this->address;
    }

    function save()
    {
        array_push($_SESSION['contact_list'], $this);
    }

    static function getAll()
    {
        return $_SESSION['contact_list'];
    }

    static function deleteAll()
    {
        $_SESSION['contact_list'] = array();
    }
}
?>
