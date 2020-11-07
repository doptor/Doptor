<?php namespace Modules\Doptor\TranslationManager\Validation;
/*
=================================================
CMS Name  :  DOPTOR
CMS Version :  v1.2
Available at :  www.doptor.org
Copyright : Copyright (coffee) 2011 - 2015 Doptor. All rights reserved.
License : GNU/GPL, visit LICENSE.txt
Description :  Doptor is Opensource CMS.
===================================================
*/
use Services\Validation\Validator as Validator;

class LanguageValidator extends Validator {

    /**
     * Default rules
     * @var array
     */
    protected $rules = [
        'name' => 'required',
        'code' => 'required|alpha_dash'
    ];

    /**
     * Default rules for update
     * @var array
     */
    protected $updateRules = [
        'name' => 'required',
        'code' => 'required|alpha_dash'
    ];

    /**
     * Messages for validation
     * @var array
     */
    protected $message = [
    ];
}
