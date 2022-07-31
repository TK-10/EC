<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;

/**
 * @EntityExtension("Eccube\Entity\Customer")
 */
trait CustomerTrait
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="fax_number", type="string", length=14, nullable=true)
     */
    private $fax_number;

    /**
     * Set fax_number.
     *
     * @param string|null $fax_number
     *
     * @return CustomerTrait
     */
    public function setFaxNumber($fax_number = null)
    {
        $this->fax_number = $fax_number;

        return $this;
    }

    /**
     * Get fax_number.
     *
     * @return string|null
     */
    public function getFaxNumber()
    {
        return $this->fax_number;
    }
}