<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Username implements Rule
{
/**
* Determine if the validation rule passes.
*
* @param string $attribute
* @param mixed $value
* @return bool
*/
public function passes($attribute, $value)
{
// Check if name contains only letters and spaces
return preg_match('/^[\pL\s]+$/u', $value);
}

/**
* Get the validation error message.
*
* @return string
*/
public function message()
{
return 'الاسم يجب أن يحتوي فقط على الحروف والمسافات.';
}
}