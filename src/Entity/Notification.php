<?php
namespace JRCouto\Asaas\Entity;

/**
 * Notification Entity
 *
 * @author Jeandro Couto
 */
final class Notification extends \JRCouto\Asaas\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $customer;

    /**
     * @var string
     */
    public $event;

    /**
     * @var int
     */
    public $scheduleOffset;

    /**
     * @var bool
     */
    public $emailEnabledForProvider;

    /**
     * @var bool
     */
    public $smsEnabledForProvider;

    /**
     * @var bool
     */
    public $emailEnabledForCustomer;

    /**
     * @var bool
     */
    public $smsEnabledForCustomer;

    /**
     * @var bool
     */
    public $enabled;
}