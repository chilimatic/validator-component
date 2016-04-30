<?php
namespace chilimatic\lib\Validator\Type\Scalar;

use chilimatic\lib\Interfaces\IFlyWeightValidator;

/**
 * Class IsInt
 * @package chilimatic\lib\Validator\Type\Scalar
 */
class IsInt implements IFlyWeightValidator
{
    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function __invoke($value)
    {
        return $this->validate($value);
    }

    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function validate($value)
    {
        return is_int($value);
    }


}