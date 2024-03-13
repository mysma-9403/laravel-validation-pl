<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'after_or_equal' => 'Atrybut :attribute musi być datą po lub równą :date.',
    'before_or_equal' => 'Atrybut :attribute musi być datą wcześniejszą lub równą dacie :date.',
    'date_equals' => 'Atrybut :attribute musi być datą równą :date.',
    'dimensions' => 'Atrybut :attribute ma nieprawidłowe wymiary obrazu.',
    'distinct' => 'Pole :attribute ma zduplikowaną wartość.',
    'ends_with' => 'Atrybut :attribute musi kończyć się jednym z poniższych: :values.',
    'file' => 'Atrybut :attribute musi być plikiem.',
    'filled' => 'Pole :attribute musi mieć wartość.',
    'gt' => [
        'numeric' => 'Wartość :attribute musi być większa niż :value.',
        'file' => 'Wartość :attribute musi być większa niż :value kilobajtów.',
        'string' => 'Wartość :attribute musi być większa niż :value znaków.',
        'array' => 'Atrybut :attribute musi mieć więcej niż :value elementów.',
    ],
    'gte' => [
        'numeric' => 'Wartość :attribute musi być większa lub równa :value.',
        'file' => 'The :attribute must be greater or equal :value kilobajts.',
        'string' => 'Atrybut :attribute musi być większy lub równy :value znaków.',
        'array' => 'Atrybut :attribute musi mieć :value elementów lub więcej.',
    ],
    
    'in_array' => 'Pole :attribute nie istnieje w :other.',
    'ipv4' => 'Atrybut :attribute musi być prawidłowym adresem IPv4.',
    'ipv6' => 'Atrybut :attribute musi być prawidłowym adresem IPv6',
    'json' => 'Atrybut :attribute musi być prawidłowym ciągiem JSON',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'Wartość :attribute musi być mniejsza niż :value kilobajtów',
        'string' => 'Wartość :attribute musi być mniejsza niż :value znaków',
        'array' => 'The :attribute must have less than :value items.'
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobajts.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.'
    ],
    'not_regex' => 'Format :attribute jest nieprawidłowy.',
    'password' => 'Hasło jest nieprawidłowe.',
    'present' => 'Pole :attribute musi być obecne.',
    'required_unless' => 'Pole :attribute jest wymagane, chyba że :other jest w :values.',
    'starts_with' => "Atrybut :attribute musi zaczynać się od jednego z poniższych: :values.",
    'string' => 'Atrybut :attribute musi być ciągiem znaków',
    'uploaded' => 'Nie udało się przesłać :attribute.',
    'uuid' => 'Atrybut :attribute musi być prawidłowym UUID.',

    "accepted" => ":attribute musi zostać zaakceptowane.", //yes, 1, true
    "active_url" => ":attribute nie jest prawidłowym adresem URL.",
    "after" => ":attribute musi być datą późniejszą niż :date.",
    "alpha" => ":attribute może zawierać tylko litery.",
    "alpha_dash" => ":attribute może zawierać tylko litery, cyfry i podkreślenia.",
    "alpha_num" => ":attribute może zawierać tylko litery i cyfry.",
    "array" => ":attribute musi być tablicą.",
    "before" => ":attribute musi być datą wcześniejszą niż :date.",
    "between" => array(
        "numeric" => ":attribute musi być wartością pomiędzy :min i :max.",
        "file" => ":attribute musi mieć pomiędzy :min a :max kilobajtów.",
        "string" => ":attribute musi mieć pomiędzy :min a :max znaków.",
        "array" => ":attribute musi mieć pomiędzy :min a :max pozycji.",
    ),
    "boolean" => "pole :attribute musi być true lub false",
    "confirmed" => ":attribute confirmation does not match.",
    "date" => ":attribute nie jest prawidłową datą.",
    "date_format" => ":attribute nie zgadza się z formatem :format.",
    "different" => ":attribute i :other muszą być różne.",
    "digits" => ":attribute musi mieć :digits cyfr.",
    "digits_between" => ":attribute musi mieć pomiędzy :min a :max cyfr.",
    "email" => ":attribute must be a valid email address.",
    "exists" => "wybrany :attribute jest nieprawidłowy.",
    "image" => ":attribute musi być obrazkiem.",
    "in" => "wybrany :attribute jest nieprawidłowy.",
    "integer" => ":attribute musi być liczbą.",
    "ip" => ":attribute musi być poprawnym adresem IP.",
    "max" => array(
        "numeric" => ":attribute nie może być większy niż :max.",
        "file" => ":attribute nie może być większy niż :max kilobajtów.",
        "string" => ":attribute nie może być dłuższy niż :max znaków.",
        "array" => ":attribute nie może mieć więcej niż :max pozycji.",
    ),
    "mimes" => ":attribute musi być plikiem typu: :values.",
    "min" => array(
        "numeric" => ":attribute musi większy lub równy :min.",
        "file" => ":attribute musi mieć co najmniej :min kilobajtów.",
        "string" => ":attribute musi mieć co najmniej :min znaków.",
        "array" => ":attribute musi mieć co najmniej :min pozycji.",
    ),
    "not_in" => "wybrany :attribute jest nieprawidłowy.",
    "numeric" => ":attribute must be a number.",
    "regex" => "format :attribute jest nieprawidłowy",
    "required" => "pole :attribute jest wymagane.",
    "required_if" => "pole :attribute jest wymagane, gdy :other ma wartość :value.",
    "required_with" => "pole :attribute jest wymagane, gdy :values są zdefiniowane.",
    "required_with_all" => "pole :attribute jest wymagane, gdy :values są zdefiniowane.",
    "required_without" => "pole :attribute jest wymagane, gdy :values nie są zdefiniowane.",
    "required_without_all" => "pole :attribute jest wymagane, gdy żadne z :values nie są zdefiniowane.",
    "same" => ":attribute i :other muszą być takie same.",
    "size" => array(
        "numeric" => ":attribute must be :size.",
        "file" => ":attribute musi mieć :size kilobajtów.",
        "string" => ":attribute musi mieć :size znaków.",
        "array" => ":attribute musi zawierać :size pozycji.",
    ),
    "unique" => ":attribute jest już zajęty.",
    "url" => "format :attribute jest nieprawidłowy.",
    "timezone" => ":attribute musi być prawidłową strefą czasową.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => array(
        'username' => 'nazwa użytkownika'
    ),
];
