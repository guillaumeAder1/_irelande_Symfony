<?php

namespace Akm\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Article")
 */
class Article
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\Column(type="string", length=13)
	 */
	protected $isbn;
	/**
	 * @ORM\Column(type="string", length=50)
	 */
	protected $title;
	/**
	 * @ORM\Column(type="text")
	 */
	protected $summary;
	

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
     * Set isbn
     *
     * @param string $isbn
     * @return Article
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    
        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Article
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    
        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

/**
* @ORM\ManyToOne(targetEntity="User", inversedBy="users")
* @ORM\JoinColumn(name="user_id", referencedColumnName="id")
*/
protected $user;


    /**
     * Set user
     *
     * @param Akm\ArticleBundle\Entity\User $user
     * @return Article
     */
    public function setUser(\Akm\ArticleBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return Akm\ArticleBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}