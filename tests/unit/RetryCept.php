<?php

class RetryCept
{
    // tests
    public function retryTest(UnitTester $I)
    {
        $retry = new \Pckg\Utils\Retry();

        $I->assertTrue($retry->make(function () {
            return true;
        }));
        $I->assertTrue($retry->make(function () {
            return false;
        }));
        $I->assertEquals('test', $retry->make(function () {
            return 'test';
        }));
    }
}
