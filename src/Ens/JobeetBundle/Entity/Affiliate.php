<?php

//src/Ens/JobeetBundle/Entity/Affiliate.php

namespace Ens\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="affiliate")
 */
class Affiliate {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $url;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $email;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $token;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $created_at;

	/**
	 * @ORM\OneToMany(targetEntity="CategoryAffiliate", mappedBy="affiliate")
	 */
	protected $category_affiliates = array();

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set url
	 *
	 * @param string $url
	 * @return Affiliate
	 */
	public function setUrl($url) {
		$this->url = $url;

		return $this;
	}

	/**
	 * Get url
	 *
	 * @return string 
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Set email
	 *
	 * @param string $email
	 * @return Affiliate
	 */
	public function setEmail($email) {
		$this->email = $email;

		return $this;
	}

	/**
	 * Get email
	 *
	 * @return string 
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Set token
	 *
	 * @param string $token
	 * @return Affiliate
	 */
	public function setToken($token) {
		$this->token = $token;

		return $this;
	}

	/**
	 * Get token
	 *
	 * @return string 
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * Set created_at
	 *
	 * @param \DateTime $createdAt
	 * @return Affiliate
	 */
	public function setCreatedAt($createdAt) {
		$this->created_at = $createdAt;

		return $this;
	}

	/**
	 * Get created_at
	 *
	 * @return \DateTime 
	 */
	public function getCreatedAt() {
		return $this->created_at;
	}

	/**
	 * Set createdatvalue
	 *
	 * @return Affiliate
	 */
	public function setCreatedAtValue() {
		$this->created_at = new \DateTime();
	}

}