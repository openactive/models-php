<?php

namespace OpenActive\Models\Tests\Unit\Modifiers;

use OpenActive\Modifiers\AggregateFacilityUseProviderModifier;
use PHPUnit\Framework\TestCase;

class AggregateFacilityUseProviderModifierTest extends TestCase
{
    protected function getTestData()
    {
        return [
            'id' => 1,
            'provider' => 'https://example.com/openactive/sellers/1'
        ];
    }

    public function testModifierRemovesProvider()
    {
        // Data for this test
        $testData = $this->getTestData();

        // Check the test data has both keys
        $this->assertArrayHasKey('id', $testData);
        $this->assertArrayHasKey('provider', $testData);

        // Create a new modifier
        $modifier = new AggregateFacilityUseProviderModifier();

        // Run the modifier against the test data
        $resultData = $modifier('', 'aggregateFacilityUse', $testData);

        // Check that the result still has the ID key
        $this->assertArrayHasKey('id', $resultData);

        // Check that the provider key has been removed
        $this->assertArrayNotHasKey('provider', $resultData);
    }

    public function testModifierDoesNotRemoveProvider()
    {
        // Data for this test
        $testData = $this->getTestData();

        // Check the test data has both keys
        $this->assertArrayHasKey('id', $testData);
        $this->assertArrayHasKey('provider', $testData);        

        // Create a new modifier
        $modifier = new AggregateFacilityUseProviderModifier();

        // Run the modifier against the test data for a key it should
        // not modify
        $resultData = $modifier('', 'someOtherIgnoredType', $testData);
        
        // Check the result data has both keys
        $this->assertArrayHasKey('id', $resultData);
        $this->assertArrayHasKey('provider', $resultData);         
    }
}