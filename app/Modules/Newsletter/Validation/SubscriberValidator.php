<?php namespace Modules\Newsletter\Validation;

use Services\Validation\Validator as Validator;

class SubscriberValidator extends Validator
{

    /**
     * Default rules
     * @var array
     */
    protected $rules = [
        'email' => 'required|email|unique:newsletter_subscribers,email'
    ];

    /**
     * Default rules for update
     * @var array
     */
    protected $updateRules = [
        'email' => 'required|email|unique:newsletter_subscribers,email'
    ];

    /**
     * Messages for validation
     * @var array
     */
    protected $message = [
        'email.unique' => 'The email is already subscribed to the newsletter'
    ];

    public function validateForUpdate($input)
    {
        $this->updateRules['email'] .= ',' . $input['id'];

        return $this->validate($input, $this->updateRules, $this->message);
    }
}
