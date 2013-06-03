<?php

//src/Ens/JobeetBundle/Entity/Category.php

namespace Ens\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="category")
 */
class Category {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $name;
	
	/**
	* @ORM\OneToMany(targetEntity="Job", mappedBy="category")
	*/
	protected $jobs = array();
	
	/**
	* @ORM\OneToMany(targetEntity="CategoryAffiliate", mappedBy="category")
	*/
	protected $category_affiliates = array();

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}