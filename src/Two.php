<?php

namespace LVR\CountryCode;

use Illuminate\Contracts\Validation\Rule;
use League\ISO3166\Exception\DomainException;
use League\ISO3166\Exception\InvalidArgumentException;
use League\ISO3166\Exception\OutOfBoundsException;
use League\ISO3166\ISO3166;

class Two implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        try {
            (new ISO3166)->alpha2($value);

            return true;
        } catch (DomainException | InvalidArgumentException | OutOfBoundsException $exception) {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Invalid ISO3166-A2 country code.';
    }
}
