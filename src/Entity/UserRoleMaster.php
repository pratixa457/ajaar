<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoleMaster
 *
 * @ORM\Table(name="user_role_master")
 * @ORM\Entity
 */
class UserRoleMaster
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_role_master_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userRoleMasterId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_role_code", type="integer", nullable=false)
     */
    private $userRoleCode;

    /**
     * @var string
     *
     * @ORM\Column(name="user_role_name", type="text", length=65535, nullable=false)
     */
    private $userRoleName;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_role_id", type="integer", nullable=false)
     */
    private $parentRoleId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_role_description", type="text", length=65535, nullable=false)
     */
    private $userRoleDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=0, nullable=false)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="domain_id", type="integer", nullable=false)
     */
    private $domainId;

    /**
     * @var int
     *
     * @ORM\Column(name="is_deleted", type="integer", nullable=false)
     */
    private $isDeleted;


}
