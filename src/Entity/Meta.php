<?php
namespace JRCouto\Asaas\Entity;

/**
 * Base Meta Entity
 *
 * @author Jeandro Couto
 */
final class Meta extends \JRCouto\Asaas\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var boolean
     */
    public $hasMore;
}