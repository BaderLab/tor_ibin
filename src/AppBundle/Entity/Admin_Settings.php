<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="`admin_settings`")
 */
class Admin_Settings
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\Column(name="`title`", type="string", length=200, nullable=true)
     */
    protected $title;

    /**
     *
     * @ORM\Column(name="`short_title`", type="string", length=200, nullable=true)
     */
    protected $short_title;
    
    /**
     * @ORM\Column(name="`home_page`", type="string", length=4000, nullable=true)
     */
    protected $home_page;

    /**
     * @ORM\Column(name="`about`", type="string", length=4000, nullable=true)
     */
    protected $about;

    /**
     * @ORM\Column(name="`color_scheme`", type="string", length=10, nullable=true)
     */
    protected $color_scheme;

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
     * Set title
     *
     * @param string $title
     *
     * @return Admin_Settings
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
     * Set homePage
     *
     * @param string $homePage
     *
     * @return Admin_Settings
     */
    public function setHomePage($homePage)
    {
        $this->home_page = $homePage;

        return $this;
    }

    /**
     * Get homePage
     *
     * @return string
     */
    public function getHomePage()
    {
        return $this->home_page;
    }

    /**
     * Set about
     *
     * @param string $about
     *
     * @return Admin_Settings
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set colorScheme
     *
     * @param string $colorScheme
     *
     * @return Admin_Settings
     */
    public function setColorScheme($colorScheme)
    {
        $this->color_scheme = $colorScheme;

        return $this;
    }

    /**
     * Get colorScheme
     *
     * @return string
     */
    public function getColorScheme()
    {
        return $this->color_scheme;
    }

    /**
     * Set shortTitle
     *
     * @param string $shortTitle
     *
     * @return Admin_Settings
     */
    public function setShortTitle($shortTitle)
    {
        $this->short_title = $shortTitle;

        return $this;
    }

    /**
     * Get shortTitle
     *
     * @return string
     */
    public function getShortTitle()
    {
        return $this->short_title;
    }
}
