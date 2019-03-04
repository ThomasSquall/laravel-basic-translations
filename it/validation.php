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

    'accepted' => "L'attributo :attribute deve essere accettato.",
    'active_url' => "L'attributo :attribute non è un URL valido.",
    'after' => "L'attributo :attribute deve essere una data successiva a :date.",
    'after_or_equal' => "L'attributo :attribute deve essere una data successiva o uguale a :date.",
    'alpha' => "L'attributo :attribute può contenere solo lettere.",
    'alpha_dash' => "L'attributo :attribute può contenere solo lettere, numeri, trattini e trattini bassi.",
    'alpha_num' => "L'attributo :attribute può contenere solo lettere e numeri.",
    'array' => "L'attributo :attribute deve essere un array.",
    'before' => "L'attributo :attribute deve essere una data precedente a :date.",
    'before_or_equal' => "L'attributo :attribute deve essere una data precedente o uguale a :date.",
    'between' => [
        'numeric' => "L'attributo :attribute deve essere compreso tra :min e :max.",
        'file' => "L'attributo :attribute deve essere compreso tra :min e :max kilobytes.",
        'string' => "L'attributo :attribute deve essere compreso tra :min e :max characters.",
        'array' => "L'attributo :attribute deve essere compreso tra :min e :max items.",
    ],
    'boolean' => "Il campo :attribute deve valere true o false.",
    'confirmed' => "L'attributo :attribute confirmation non corrisponde.",
    'date' => "L'attributo :attribute non è una data valida.",
    'date_equals' => "L'attributo :attribute deve essere una data uguale a :date.",
    'date_format' => "L'attributo :attribute non corrisponde al formato :format.",
    'different' => "L'attributo :attribute e :other devono essere diversi.",
    'digits' => "L'attributo :attribute deve essere :digits digits.",
    'digits_between' => "L'attributo :attribute deve essere compreso tra :min e :max digits.",
    'dimensions' => "L'attributo :attribute ha dimensioni d'immagine non valide.",
    'distinct' => "Il campo :attribute ha un valore duplicato.",
    'email' => "L'attributo :attribute deve essere un indirizzo email valido.",
    'exists' => "L'attributo :attribute selezionato non è valido.",
    'file' => "L'attributo :attribute deve essere a file.",
    'filled' => "Il campo :attribute deve avere un valore.",
    'gt' => [
        'numeric' => "L'attributo :attribute deve essere più grande di :value.",
        'file' => "L'attributo :attribute deve essere più grande di :value kilobytes.",
        'string' => "L'attributo :attribute deve essere più grande di :value characters.",
        'array' => "L'attributo :attribute deve avere more than :value items.",
    ],
    'gte' => [
        'numeric' => "L'attributo :attribute deve essere più grande o uguale di :value.",
        'file' => "L'attributo :attribute deve essere più grande o uguale di :value kilobyte.",
        'string' => "L'attributo :attribute deve essere più grande o uguale di:value caratteri.",
        'array' => "L'attributo :attribute deve avere :value oggetti o più.",
    ],
    'image' => "L'attributo :attribute deve essere un'immagine.",
    'in' => "L'attributo :attribute selezionato non è valido.",
    'in_array' => "Il campo :attribute non esiste in :other.",
    'integer' => "L'attributo :attribute deve essere un intero.",
    'ip' => "L'attributo :attribute deve essere un indirizzo IP valido.",
    'ipv4' => "L'attributo :attribute deve essere un indirizzo IPv4 valido.",
    'ipv6' => "L'attributo :attribute deve essere un indirizzo IPv6 valido.",
    'json' => "L'attributo :attribute deve essere una stringa JSON valida.",
    'lt' => [
        'numeric' => "L'attributo :attribute deve essere più piccolo di :value.",
        'file' => "L'attributo :attribute deve essere più piccolo di :value kilobyte.",
        'string' => "L'attributo :attribute deve essere più piccolo di :value caratteri.",
        'array' => "L'attributo :attribute deve avere meno di :value oggetti.",
    ],
    'lte' => [
        'numeric' => "L'attributo :attribute deve essere più piccolo o uguale di :value.",
        'file' => "L'attributo :attribute deve essere più piccolo o uguale di :value kilobyte.",
        'string' => "L'attributo :attribute deve essere più piccolo o uguale di :value carattero.",
        'array' => "L'attributo :attribute non deve avere più di :value oggetti.",
    ],
    'max' => [
        'numeric' => "L'attributo :attribute non dovrebbe essere più grande di :max.",
        'file' => "L'attributo :attribute non dovrebbe essere più grande di :max kilobyte.",
        'string' => "L'attributo :attribute non dovrebbe essere più grande di :max caratteri.",
        'array' => "L'attributo :attribute non dovrebbe avere più di :max oggetti.",
    ],
    'mimes' => "L'attributo :attribute deve essere un file di tipo: :values.",
    'mimetypes' => "L'attributo :attribute deve essere un file di tipo: :values.",
    'min' => [
        'numeric' => "L'attributo :attribute deve essere almeno :min.",
        'file' => "L'attributo :attribute deve essere almeno :min kilobyte.",
        'string' => "L'attributo :attribute deve essere almeno :min caratteri.",
        'array' => "L'attributo :attribute deve avere almeno :min oggetti.",
    ],
    'not_in' => "L'attributo :attribute selezionato non è valido.",
    'not_regex' => "Il formato dell'attributo :attribute non è valido.",
    'numeric' => "L'attributo :attribute deve essere un numero.",
    'present' => "Il campo :attribute deve essere presente.",
    'regex' => "Il formato dell'attributo :attribute non è valido.",
    'required' => "Il campo :attribute è richiesto.",
    'required_if' => "Il campo :attribute è richiesto quando :other vale :value.",
    'required_unless' => "Il campo :attribute è richiesto a meno che :other è contenuto in :values.",
    'required_with' => "Il campo :attribute è richiesto quando :values è presente.",
    'required_with_all' => "Il campo :attribute è richiesto quando :values sono presenti.",
    'required_without' => "Il campo :attribute è richiesto quando :values non è presente.",
    'required_without_all' => "Il campo :attribute è richiesto quando nessuno dei :values sono presenti.",
    'same' => "L'attributo :attribute e :other devono corrispondere.",
    'size' => [
        'numeric' => "L'attributo :attribute deve essere :size.",
        'file' => "L'attributo :attribute deve essere :size kilobytes.",
        'string' => "L'attributo :attribute deve essere :size characters.",
        'array' => "L'attributo :attribute must contain :size items.",
    ],
    'starts_with' => "L'attributo :attribute deve iniziare con uno dei seguenti: :values",
    'string' => "L'attributo :attribute deve essere una stringa.",
    'timezone' => "L'attributo :attribute deve essere una zona valida.",
    'unique' => "L'attributo :attribute è già stato preso.",
    'uploaded' => "L'attributo :attribute ha fallito l'upload.",
    'url' => "il formato dell'attributo :attribute non è valido.",
    'uuid' => "L'attributo :attribute deve essere un UUID valido.",

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
