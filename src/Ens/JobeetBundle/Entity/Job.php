<?php

//src/Ens/JobeetBundle/Entity/Job.php

namespace Ens\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="job")
 */
class Job {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	protected $type;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $company;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	protected $logo;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	protected $url;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $position;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $location;

	/**
	 * @ORM\Column(type="text")
	 */
	protected $description;

	/**
	 * @ORM\Column(type="text")
	 */
	protected $how_to_apply;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	protected $token;

	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */
	protected $is_public;

	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */
	protected $is_activated;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $email;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $expires_at;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $created_at;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	protected $updated_at;

	/**
	 * @ORM\ManyToOne(targetEntity="Category", inversedBy="jobs")
	 * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
	 */
	protected $category = array();

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set type
	 *
	 * @param string $type
	 * @return Job
	 */
	public function setType($type) {
		$this->type = $type;

		return $this;
	}

	/**
	 * Get type
	 *
	 * @return string 
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Set company
	 *
	 * @param string $company
	 * @return Job
	 */
	public function setCompany($company) {
		$this->company = $company;

		return $this;
	}

	/**
	 * Get company
	 *
	 * @return string 
	 */
	public function getCompany() {
		return $this->company;
	}

	/**
	 * Set logo
	 *
	 * @param string $logo
	 * @return Job
	 */
	public function setLogo($logo) {
		$this->logo = $logo;

		return $this;
	}

	/**
	 * Get logo
	 *
	 * @return string 
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * Set url
	 *
	 * @param string $url
	 * @return Job
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
	 * Set position
	 *
	 * @param string $position
	 * @return Job
	 */
	public function setPosition($position) {
		$this->position = $position;

		return $this;
	}

	/**
	 * Get position
	 *
	 * @return string 
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * Set location
	 *
	 * @param string $location
	 * @return Job
	 */
	public function setLocation($location) {
		$this->location = $location;

		return $this;
	}

	/**
	 * Get location
	 *
	 * @return string 
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Set description
	 *
	 * @param string $description
	 * @return Job
	 */
	public function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Get description
	 *
	 * @return string 
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Set how_to_apply
	 *
	 * @param string $howToApply
	 * @return Job
	 */
	public function setHowToApply($howToApply) {
		$this->how_to_apply = $howToApply;

		return $this;
	}

	/**
	 * Get how_to_apply
	 *
	 * @return string 
	 */
	public function getHowToApply() {
		return $this->how_to_apply;
	}

	/**
	 * Set token
	 *
	 * @param string $token
	 * @return Job
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
	 * Set is_public
	 *
	 * @param boolean $isPublic
	 * @return Job
	 */
	public function setIsPublic($isPublic) {
		$this->is_public = $isPublic;

		return $this;
	}

	/**
	 * Get is_public
	 *
	 * @return boolean 
	 */
	public function getIsPublic() {
		return $this->is_public;
	}

	/**
	 * Set is_activated
	 *
	 * @param boolean $isActivated
	 * @return Job
	 */
	public function setIsActivated($isActivated) {
		$this->is_activated = $isActivated;

		return $this;
	}

	/**
	 * Get is_activated
	 *
	 * @return boolean 
	 */
	public function getIsActivated() {
		return $this->is_activated;
	}

	/**
	 * Set email
	 *
	 * @param string $email
	 * @return Job
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
	 * Set expires_at
	 *
	 * @param \DateTime $expiresAt
	 * @return Job
	 */
	public function setExpiresAt($expiresAt) {
		$this->expires_at = $expiresAt;

		return $this;
	}

	/**
	 * Get expires_at
	 *
	 * @return \DateTime 
	 */
	public function getExpiresAt() {
		return $this->expires_at;
	}

	/**
	 * Set created_at
	 *
	 * @param \DateTime $createdAt
	 * @return Job
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
	 * Set updated_at
	 *
	 * @param \DateTime $updatedAt
	 * @return Job
	 */
	public function setUpdatedAt($updatedAt) {
		$this->updated_at = $updatedAt;

		return $this;
	}

	/**
	 * Get updated_at
	 *
	 * @return \DateTime 
	 */
	public function getUpdatedAt() {
		return $this->updated_at;
	}
	
	/**
	 * Set createdatvalue
	 *
	 * @return Job
	 */

	public function setCreatedAtValue() {
		if (!$this->getCreatedAt()) {
			$this->created_at = new \DateTime();
		}
	}

	/**
	 * Set updatedatvalue
	 *
	 * @return Job
	 */
	
	public function setUpdatedAtValue() {
		$this->updated_at = new \DateTime();
	}

}