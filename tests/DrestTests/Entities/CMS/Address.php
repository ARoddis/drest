<?php
namespace DrestTests\Entities\CMS;

use Doctrine\ORM\Mapping as ORM;
use Drest\Mapping\Annotation as Drest;

/**
 * Address
 *
 * @Drest\Resource(
 *        representations={"Xml", "Json"},
 *      routes={
 *      	@Drest\Route(name="delete", routePattern="/address/:id", verbs={"DELETE"})
 *      }
 * )
 *
 * @ORM\Table(name="address")
 * @ORM\Entity
 */
class Address
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
     * @var Profile $profile
     * @ORM\ManyToOne(targetEntity="Profile", inversedBy="addresses", fetch="EAGER")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $profile;

    /**
     * @var string $address
     * @ORM\Column(name="address", type="string")
     */
    private $address;
}
