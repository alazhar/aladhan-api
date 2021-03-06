<?php
use AlAdhanApi\Model\Locations;

class LocationsTest extends \PHPUnit\Framework\TestCase
{
    private $client;

    public function setup()
    {
        $this->locations = new Locations();
    }

    public function testGoogleCity()
    {
        $r = $this->locations->getGoogleCoOrdinatesAndZone('Inverness', 'UK', 'Scotland');
        $this->assertEquals('57.477773', $r['latitude']);
        $this->assertEquals('-4.224721', $r['longitude']);
        $this->assertEquals('Europe/London', $r['timezone']);
    }

    public function testGoogleAddress()
    {
        $r = $this->locations->getAddressCoOrdinatesAndZone('Inverness, Scotland, UK');
        $this->assertEquals('57.477773', $r['latitude']);
        $this->assertEquals('-4.224721', $r['longitude']);
        $this->assertEquals('Europe/London', $r['timezone']);
    }
}
