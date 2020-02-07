<?php

namespace Comsave\Tests\Unit\Tools\UsernameGenerator;

use Comsave\Tools\UsernameGenerator\MythologicalUsernameGenerator;
use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

class MythologicalUsernameGeneratorTest extends TestCase
{
    use MatchesSnapshots;

    /** @var MythologicalUsernameGenerator */
    private $mythologicalUsernameGenerator;

    public function setUp(): void
    {
        $resourceDir = preg_replace('/tests\/Unit/i', 'src', dirname(__FILE__)).'/Resources';
        $this->mythologicalUsernameGenerator = new MythologicalUsernameGenerator($resourceDir);
    }

    public function testGenerateUsername(): void
    {
        $seed = 451511141421;
        $username = $this->mythologicalUsernameGenerator->generateUsername($seed);

        $this->assertMatchesJsonSnapshot([$username]);
    }
}
