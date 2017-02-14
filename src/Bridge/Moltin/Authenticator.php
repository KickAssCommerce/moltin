<?php

namespace KickAss\Moltin\Bridge\Moltin;

use KickAss\Commerce\Application\AuthenticatorInterface;
use KickAss\Commerce\Authentication\Exception\FailedToAuthenticateException;
use Moltin\SDK\Facade\Moltin as Moltin;

class Authenticator implements AuthenticatorInterface
{
    /**
     * @return bool
     * @throws FailedToAuthenticateException
     */
    public function authenticate()
    {
        $result = Moltin::Authenticate(
            'ClientCredentials',
            [
                'client_id'     => getenv('MOLTIN_CLIENT_ID'),
                'client_secret' => getenv('MOLTIN_CLIENT_SECRET')
            ]
        );

        if ($result === false) {
            throw new FailedToAuthenticateException();
        }
        return $result;
    }
}
