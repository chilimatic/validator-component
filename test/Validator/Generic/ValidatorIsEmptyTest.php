<?php
use chilimatic\lib\Validator\Generic\IsEmpty;

/**
 *
 * @author j
 * Date: 10/22/15
 * Time: 9:03 PM
 *
 */
class ValidatorIsEmptyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function checkIfValidatorImplementsTheInterface() {
        $validator = new IsEmpty();
        self::assertInstanceOf('\chilimatic\lib\interfaces\IFlyweightValidator', $validator);
    }

    /**
     * @test
     */
    public function checkIfEmptyStringIsValid() {
        $validator = new IsEmpty();
        $ret = $validator->validate('');

        self::assertTrue($ret);
    }

    /**
     * @test
     */
    public function checkIfEmptyIntIsValid() {
        $validator = new IsEmpty();
        $ret = $validator->validate(0);

        self::assertTrue($ret);
    }

    /**
     * @test
     */
    public function checkIfEmptyArrayIsValid() {
        $validator = new IsEmpty();
        $ret = $validator->validate([]);

        self::assertTrue($ret);
    }

    /**
     * @test
     */
    public function checkIfEmptyObjectIsValid() {
        $validator = new IsEmpty();
        $ret = $validator->validate(new stdClass());

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfNullIsValid() {
        $validator = new IsEmpty();
        $ret = $validator->validate(null);

        self::assertTrue($ret);
    }
}