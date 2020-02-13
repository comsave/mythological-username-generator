<?php

namespace Comsave\Tests\Unit\Tools\UsernameGenerator;

use Comsave\Tools\UsernameGenerator\MythologicalUsernameGenerator;
use Comsave\Tools\UsernameGenerator\MythologicalUsernameGeneratorBuilder;
use PHPUnit\Framework\TestCase;

class MythologicalUsernameGeneratorBuilderTest extends TestCase
{
    public function testBuild(): void
    {
        $this->assertInstanceOf(MythologicalUsernameGenerator::class, MythologicalUsernameGeneratorBuilder::build());
    }
}
