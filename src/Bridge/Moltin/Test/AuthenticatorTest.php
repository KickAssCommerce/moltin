<?php

namespace KickAss\Moltin\Bridge\Moltin\Test;

use PHPUnit\Framework\TestCase;
use Moltin\SDK\Facade\Moltin as Moltin;

/**
 * @covers Authenticator
 */
final class AuthenticatorTest extends TestCase
{
    /**
     * test Moltin credentials
     */
    public function testPopulateProduct()
    {
        $result = Moltin::Authenticate(
            'ClientCredentials',
            [
                'client_id'     => getenv('MOLTIN_CLIENT_ID'),
                'client_secret' => getenv('MOLTIN_CLIENT_SECRET')
            ]
        );

        $this->assertEquals(true, $result, "Could not authenticate with Moltin credentials");
    }
}