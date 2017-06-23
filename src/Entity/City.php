<?php
namespace JRCouto\Asaas\Entity;

/**
 * City Entity
 *
 * @author Jeandro Couto
 */
final class City extends \JRCouto\Asaas\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $ibgeCode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $districtCode;

    /**
     * @var string
     */
    public $district;

    /**
     * @var string
     */
    public $state;
}