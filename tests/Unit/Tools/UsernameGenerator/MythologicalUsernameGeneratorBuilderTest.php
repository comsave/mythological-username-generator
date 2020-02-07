<?php

namespace Comsave\Tests\Unit\Tools\UsernameGenerator;

use Comsave\Tools\UsernameGenerator\MythologicalUsernameGenerator;
use Comsave\Tools\UsernameGenerator\MythologicalUsernameGeneratorBuilder;
use PHPUnit\Framework\TestCase;

class MythologicalUsernameGeneratorBuilderTest extends TestCase
{
    /** @var MythologicalUsernameGeneratorBuilder */
    private $usernameGeneratorBuilder;

    public function setUp(): void
    {
        $this->usernameGeneratorBuilder = new MythologicalUsernameGeneratorBuilder();
    }

    public function testBuild(): void
    {
        $this->assertInstanceOf(MythologicalUsernameGenerator::class, $this->usernameGeneratorBuilder->build());
    }
}
