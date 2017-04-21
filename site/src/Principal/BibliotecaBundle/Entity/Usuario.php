<?php
// src/AppBundle/Entity/User.php

namespace Principal\BibliotecaBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="Usuario")
 */
class Usuario extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /** @ORM\Column(name="facebook_id", type="string", length=255, nullable=true) */
    protected $facebook_id;
    /** @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true) */
    protected $facebook_access_token;
    /** @ORM\Column(name="google_id", type="string", length=255, nullable=true) */
    protected $google_id;
    /** @ORM\Column(name="google_access_token", type="string", length=255, nullable=true) */
    protected $google_access_token;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function setFacebookId($facebookId)
    {
        $this->facebook_id = $facebookId;
        return $this;
    }

    public function setFacebookAccessToken($facebookAccessToken)
    {
        $this->facebook_access_token = $facebookAccessToken;
        return $this;
    }

    public function setGoogleId($googleId)
    {
        $this->google_id = $googleId;
        return $this;
    }

    public function setGoogleAccessToken($googleAccessToken)
    {
        $this->google_access_token = $googleAccessToken;
        return $this;
    }
}
