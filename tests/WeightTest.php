<?php

namespace Suraj\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Suraj\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}


//it('can test', function () {
//    expect(true)->toBeTrue();
//});
