<?php

namespace chilimatic\lib\Validator\Type\Scalar;

use chilimatic\lib\Interfaces\IFlyWeightValidator;

/**
 * Class IsNull
 *
 * @package chilimatic\lib\Validator\Type\Scalar
 */
class IsNull implements IFlyWeightValidator
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
        return is_null($value);
    }
}