<?php

namespace App\Rules;

use App\Models\Gost;
use Illuminate\Contracts\Validation\Rule;

class PostojiGost implements Rule
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
        $gost=Gost::find($value);
        return $gost!=null;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Gost sa prosledjenim ID ne postoji.';
    }
}
