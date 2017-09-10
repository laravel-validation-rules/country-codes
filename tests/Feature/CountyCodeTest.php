<?php

namespace LVR\CountryCode\Tests\Feature;

use LVR\CountryCode\Three;
use LVR\CountryCode\Two;
use LVR\CountryCode\Tests\TestCase;
use Validator;

class CountyCodeTest extends TestCase
{
    /**
     * @param       $country
     *
     * @return \Illuminate\Validation\Validator
     */
    protected function two($country)
    {
        return Validator::make(['country' => $country], ['country' => ['required', new Two]]);
    }

    /**
     * @param       $country
     *
     * @return \Illuminate\Validation\Validator
     */
    protected function three($country)
    {
        return Validator::make(['country' => $country], ['country' => ['required', new Three]]);
    }

    /** @test */
    public function check_two_digit_codes()
    {
        $this->assertTrue($this->two('GB')->passes());
        $this->assertTrue($this->two('de')->passes());
        $this->assertTrue($this->two('ZZ')->fails());

        $this->assertTrue($this->two('a')->fails());
        $this->assertTrue($this->two(1)->fails());
    }

    /** @test */
    public function check_three_digit_codes()
    {
        $this->assertTrue($this->three('GBR')->passes());
        $this->assertTrue($this->three('usa')->passes());
        $this->assertTrue($this->three('ZZZ')->fails());

        $this->assertTrue($this->three('a')->fails());
        $this->assertTrue($this->three(1)->fails());
    }
}
