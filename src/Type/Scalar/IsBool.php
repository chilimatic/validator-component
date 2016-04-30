<?php

namespace chilimatic\lib\Validator\Type\Scalar;
use chilimatic\lib\Interfaces\IFlyWeightValidator;

/**
 * Class IsBool
 *
 * @package chilimatic\lib\Validator\Type\Scalar
 */
class IsBool implements IFlyWeightValidator
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
        return is_bool($value);
    }


}