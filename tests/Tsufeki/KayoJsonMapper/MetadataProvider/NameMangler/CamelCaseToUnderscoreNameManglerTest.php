<?php declare(strict_types=1);

namespace Tests\Tsufeki\KayoJsonMapper\MetadataProvider\NameMangler;

use PHPUnit\Framework\TestCase;
use Tsufeki\KayoJsonMapper\MetadataProvider\NameMangler\CamelCaseToUnderscoreNameMangler;

/**
 * @covers \Tsufeki\KayoJsonMapper\MetadataProvider\NameMangler\CamelCaseToUnderscoreNameMangler
 */
class CamelCaseToUnderscoreNameManglerTest extends TestCase
{
    /**
     * @dataProvider data
     */
    public function test_mangle(string $name, string $expected)
    {
        $mangler = new CamelCaseToUnderscoreNameMangler();

        $this->assertSame($expected, $mangler->mangle($name));
    }

    public function data(): array
    {
        return [
            ['fooBar', 'foo_bar'],
            ['_foo_bar_', '_foo_bar_'],
            ['FooBar', 'foo_bar'],
        ];
    }
}
