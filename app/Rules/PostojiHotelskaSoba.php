<?php

namespace App\Rules;

use App\Models\HotelskaSoba;
use Illuminate\Contracts\Validation\Rule;

class PostojiHotelskaSoba implements Rule
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
        $hotelskaSoba=HotelskaSoba::find($value);
        return $hotelskaSoba!=null;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Hotelska soba sa prosledjenim ID ne posotoji. ';
    }
}
