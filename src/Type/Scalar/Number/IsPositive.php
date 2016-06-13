<?php
namespace chilimatic\lib\Validator\Type\Scalar\Number;
use chilimatic\lib\Interfaces\IFlyWeightValidator;

/**
 * Class IsPositive
 * @package chilimatic\lib\Validator\Type\Scalar\number
 */
class IsPositive implements IFlyWeightValidator
{
    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function __invoke($value) : bool
    {
        return $this->validate($value);
    }

    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function validate($value) : bool
    {
        return (is_numeric($value) && $value >= 0);
    }


}