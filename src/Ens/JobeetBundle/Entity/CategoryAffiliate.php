<?php

//src/Ens/JobeetBundle/Entity/CategoryAffiliate.php

namespace Ens\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="category_affiliate")
 */
class CategoryAffiliate {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	* @ORM\ManyToOne(targetEntity="Category", inversedBy="category_affiliates")
	 * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
	*/
	protected $category = array();
	
	/**
	* @ORM\ManyToOne(targetEntity="Affiliate", inversedBy="category_affiliates")
	 * @ORM\JoinColumn(name="affiliate_id", referencedColumnName="id")
	*/
	protected $affiliate = array();

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}