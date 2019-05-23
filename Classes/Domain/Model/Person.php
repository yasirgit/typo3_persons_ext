<?php

namespace OH\Persons\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Class Person
 * @package OH\Persons
 *
 * @db
 */
class Person extends AbstractEntity
{
    /**
     * @var string
     * @db
     */
    protected $firstName;

    /**
     * @var string
     * @db
     */
    protected $lastName;

    /**
     * @var string
     * @db
     */
    protected $email;

    /**
     * @var \OH\BaseOh\Domain\Model\Role
     * @db
     */
    protected $role;

    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @db
     */
    protected $profilePic;

    /**
     * @var bool
     */
    protected $hidden;

    /**
     * @var string
     * @db
     */
    protected $phone;

    /**
     * @var bool
     * @db
     */
    protected $isEmployer;

    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @db
     */
    protected $potrait;

    /**
     * @var string
     * @enableRichText
     * @db
     */
    protected $description;

    /**
     * @var string
     * @db
     */
    protected $sectionClass;

    /**
     * @var string
     * @db
     */
    protected $linkedinProfile;

    /**
     * @var string
     * @db
     */
    protected $quote;

    /**
     * @var string
     * @db
     */
    protected $imageWidth;

    /**
     * @var string
     * @db
     */
    protected $imageHeight;

    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @db
     */
    protected $sayHelloPotrait;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return \OH\BaseOh\Domain\Model\Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param \OH\BaseOh\Domain\Model\Role $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getProfilePic()
    {
        return $this->profilePic;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $profilePic
     */
    public function setProfilePic($profilePic)
    {
        $this->profilePic = $profilePic;
    }

    /**
     * @return boolean
     */
    public function isHidden()
    {
        return $this->hidden;
    }

    /**
     * @param boolean $hidden
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getIsEmployer()
    {
        return $this->isEmployer;
    }

    /**
     * @param mixed $isEmployer
     */
    public function setIsEmployer($isEmployer)
    {
        $this->isEmployer = $isEmployer;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getPotrait()
    {
        return $this->potrait;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $potrait
     */
    public function setPotrait($potrait)
    {
        $this->potrait = $potrait;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getSectionClass()
    {
        return $this->sectionClass;
    }

    /**
     * @param string $sectionClass
     */
    public function setSectionClass($sectionClass)
    {
        $this->sectionClass = $sectionClass;
    }

    /**
     * @return string
     */
    public function getLinkedinProfile()
    {
        return $this->linkedinProfile;
    }

    /**
     * @param string $linkedinProfile
     */
    public function setLinkedinProfile($linkedinProfile)
    {
        $this->linkedinProfile = $linkedinProfile;
    }

    /**
     * @return string
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @param string $quote
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;
    }

    /**
     * @return string
     */
    public function getImageWidth()
    {
        return $this->imageWidth;
    }

    /**
     * @param string $imageWidth
     */
    public function setImageWidth($imageWidth)
    {
        $this->imageWidth = $imageWidth;
    }

    /**
     * @return string
     */
    public function getImageHeight()
    {
        return $this->imageHeight;
    }

    /**
     * @param string $imageHeight
     */
    public function setImageHeight($imageHeight)
    {
        $this->imageHeight = $imageHeight;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getSayHelloPotrait()
    {
        return $this->sayHelloPotrait;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $sayHelloPotrait
     */
    public function setSayHelloPotrait($sayHelloPotrait)
    {
        $this->sayHelloPotrait = $sayHelloPotrait;
    }



}