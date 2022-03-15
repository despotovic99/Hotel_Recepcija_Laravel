<?php

namespace App\Rules;

use App\Models\Hotel;
use Illuminate\Contracts\Validation\Rule;

class PostojiHotel implements Rule
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
        $hotel=Hotel::find($value);
        return $hotel!=null;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Hotel sa prosledjenim ID ne postoji!';
    }
}
