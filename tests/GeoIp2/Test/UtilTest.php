<?php

namespace GeoIp2\Test;

use GeoIp2\Util;

/**
 * @coversNothing
 */
class UtilTest extends \PHPUnit_Framework_TestCase
{
    public function testCidr()
    {
        $this->assertSame('2001:db0::/28', Util::cidr('2001:0db8:85a3:0000:0000:8a2e:0370:7334', 28));
        $this->assertSame('192.168.213.110/31', Util::cidr('192.168.213.111', 31));
    }
}
