<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CaptchaGoogle implements Rule
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
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        $secret = env('RECAPTCHA_SECRET_KEY');
        $captcha = trim($_POST['g-recaptcha-response']);
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$captcha}&remoteip={$ip}";

        $options = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
            ),
        );
        $context = stream_context_create($options);
        $res = json_decode(file_get_contents($url, FILE_TEXT, $context));

        if ($res->success) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('error captcha');
    }
}
