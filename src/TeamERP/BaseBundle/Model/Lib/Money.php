<?php
namespace TeamERP\BaseBundle\Model\Lib;
/**
 * Description of Money
 *
 * @author Abel Guzman
 */
class Money
{
    private $value;
    /**
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value  = $value;
    }
    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
}