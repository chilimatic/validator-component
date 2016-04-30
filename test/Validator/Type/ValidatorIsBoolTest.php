<?php
use chilimatic\lib\Validator\Type\Scalar\IsBool;


class ValdiatorIsBoolTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function checkIfValidatorImplementsTheInterface() {
        $validator = new IsBool();
        self::assertInstanceOf('\chilimatic\lib\interfaces\IFlyweightValidator', $validator);
    }

    /**
     * @test
     */
    public function checkIfStringIsValid() {
        $validator = new IsBool();
        $ret = $validator->validate('asdasdasd');

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfIntIsValid() {
        $validator = new IsBool();
        $ret = $validator->validate(1230);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfFloatIsValid() {
        $validator = new IsBool();
        $ret = $validator->validate(1230.23);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfBinaryIntIsValidValid() {
        $validator = new IsBool();
        $ret = $validator->validate(0b1100000011101001010);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfArrayIsValid() {
        $validator = new IsBool();
        $ret = $validator->validate([]);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfObjectIsValid() {
        $validator = new IsBool();
        $ret = $validator->validate(new stdClass());

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfBoolIsValid() {
        $validator = new IsBool();
        $ret = $validator->validate(true);

        self::assertTrue($ret);
    }

    /**
     * @test
     */
    public function checkIfNullIsValid() {
        $validator = new IsBool();
        $ret = $validator->validate(null);

        self::assertFalse($ret);
    }
}