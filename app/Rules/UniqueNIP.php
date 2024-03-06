<?php 
namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Employee;

class UniqueNIP implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Check if the NIP already exists in the database
        if (Employee::where('NIP', $value)->exists()) {
            $fail("The NIP '$value' has already been taken, please choose another one.");
        }
    }
    
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'The NIP has already been taken, please choose another one.';
    }
}
