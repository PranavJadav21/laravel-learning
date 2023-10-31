<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordRegex implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $passwordValid = $value;
        return $passwordValid === $value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '
        * Use this one if you also require at least one symbol.
        * Needs to be in an array as it contains a pipe symbol.
        * Password is required with a minimum of 6 characters
        * Should have at least 1 lowercase AND 1 uppercase AND 1 number AND 1 symbol';
    }
}
