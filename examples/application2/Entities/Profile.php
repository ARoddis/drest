<?php
namespace Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * Profile
 *
 * @ORM\Table(name="profile")
 * @ORM\Entity
 */
class Profile
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Entities\User $user
     * @ORM\OneToOne(targetEntity="User", inversedBy="profile", fetch="LAZY")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $user;

    /**
     * @var ArrayCollection $addresses
     * @ORM\OneToMany(targetEntity="Address", mappedBy="profile", fetch="LAZY")
     */
    private $addresses;

    /**
     * @var string $title
     * @ORM\Column(name="title", type="string")
     */
    private $title;

    /**
     * @var string $firstname
     * @ORM\Column(name="firstname", type="string")
     */
    private $firstname;

    /**
     * @var string $lastname
     * @ORM\Column(name="lastname", type="string")
     */
    private $lastname;


    public function __construct()
    {
        $this->addresses = new ArrayCollection();
    }
}