<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
    public function __construct(protected ApiClient $client)
    { }

    public function subscribe(string $email, string $list = null)
    {
        $list = empty($list) ? config('services.mailchimp.lists.subscribers') : $list;

        $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed',
        ]);
    }
}
