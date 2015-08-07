<?php
class Contact
{
    private $name;
    private $number;
    private $address;
//constructor sets the properties
    function __construct($name, $number, $address)
    {
        $this->name = $name;
        $this->number = $number;
        $this->address = $address;
    }

 //setters for each property (name, number, address)

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
        $this->address = $new_address;
    }

 //getters for each property (name, number, address)
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

//methods to save, get all, and delete all contact objects
    function save()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }
}
?>
