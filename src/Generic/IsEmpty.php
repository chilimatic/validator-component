<?php

namespace chilimatic\lib\Validator\Generic;

use chilimatic\lib\Interfaces\IFlyWeightValidator;

/**
 * Class IsEmpty
 * @package chilimatic\Lib\Validator\Generic
 */
class IsEmpty implements IFlyWeightValidator
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
        return empty($value);
    }
}