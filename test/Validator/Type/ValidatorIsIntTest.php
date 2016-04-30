<?php
use chilimatic\lib\Validator\Type\Scalar\IsInt;

/**
 *
 * @author j
 * Date: 10/22/15
 * Time: 9:03 PM
 *
 */
class ValdiatorIsIntTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function checkIfValidatorImplementsTheInterface() {
        $validator = new IsInt();
        self::assertInstanceOf('\chilimatic\lib\interfaces\IFlyweightValidator', $validator);
    }

    /**
     * @test
     */
    public function checkIfStringIsValid() {
        $validator = new IsInt();
        $ret = $validator->validate('');

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfIntIsValid() {
        $validator = new IsInt();
        $ret = $validator->validate(1230);

        self::assertTrue($ret);
    }

    /**
     * @test
     */
    public function checkIfFloatIsValid() {
        $validator = new IsInt();
        $ret = $validator->validate(1230.23);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfBinaryIntIsValidValid() {
        $validator = new IsInt();
        $ret = $validator->validate(0b1100000011101001010);

        self::assertTrue($ret);
    }

    /**
     * @test
     */
    public function checkIfArrayIsValid() {
        $validator = new IsInt();
        $ret = $validator->validate([]);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfObjectIsValid() {
        $validator = new IsInt();
        $ret = $validator->validate(new stdClass());

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfBoolIsValid() {
        $validator = new IsInt();
        $ret = $validator->validate(true);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfNullIsValid() {
        $validator = new IsInt();
        $ret = $validator->validate(null);

        self::assertFalse($ret);
    }
}