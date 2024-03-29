<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 *
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product {

    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     * @Assert\Length(min=2, max=100)
     */
    private $name;

    /**
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     * @Assert\Length(min=2, max=100)
     */
    private $type;

    public function __construct() {
       
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        echo "Product:setName\n";
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

    public function __toString() {
        return (string) $this->id;
    }

}
