<?php
// src/Entity/Country.php
namespace App\Entity;

class Country
{

    /**
     * @var string
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="iso_code", type="string")
     */
    private $iso_code;

    /**
     * @var string
     * @ORM\Column(name="phone_code", type="string")
     */
    private $phone_code;
}