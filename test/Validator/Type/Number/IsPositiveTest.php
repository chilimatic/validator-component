<?php

use chilimatic\lib\Validator\Type\Scalar\Number\IsPositive;

class ValdiatorIsPositive extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function checkIfValidatorImplementsTheInterface() {
        $validator = new IsPositive();
        self::assertInstanceOf('\chilimatic\lib\interfaces\IFlyweightValidator', $validator);
    }

    /**
     * @test
     */
    public function checkIfStringIsValid() {
        $validator = new IsPositive();
        $ret = $validator->validate('asdasdasd');

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfIntIsValid() {
        $validator = new IsPositive();
        $ret = $validator->validate(1230);

        self::assertTrue($ret);
    }

    /**
     * @test
     */
    public function checkIfNegativeIntIsValid() {
        $validator = new IsPositive();
        $ret = $validator->validate(-1230);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfNegativeFloatIsValid() {
        $validator = new IsPositive();
        $ret = $validator->validate(-1230.23);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfFloatIsValid() {
        $validator = new IsPositive();
        $ret = $validator->validate(1230.23);

        self::assertTrue($ret);
    }

    /**
     * @test
     */
    public function checkIfBinaryIntIsValidValid() {
        $validator = new IsPositive();
        $ret = $validator->validate(0b1100000011101001010);

        self::assertTrue($ret);
    }

    /**
     * @test
     */
    public function checkIfArrayIsValid() {
        $validator = new IsPositive();
        $ret = $validator->validate([]);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfObjectIsValid() {
        $validator = new IsPositive();
        $ret = $validator->validate(new stdClass());

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfBoolIsValid() {
        $validator = new IsPositive();
        $ret = $validator->validate(true);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfNullIsValid() {
        $validator = new IsPositive();
        $ret = $validator->validate(null);

        self::assertFalse($ret);
    }

}