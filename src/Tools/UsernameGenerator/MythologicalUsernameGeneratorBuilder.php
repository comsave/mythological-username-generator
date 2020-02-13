<?php

namespace Comsave\Tools\UsernameGenerator;

/**
 * Stating methods required for Symfony service build from factory in yml
 */
class MythologicalUsernameGeneratorBuilder
{
    public static function build(): MythologicalUsernameGenerator
    {
        return new MythologicalUsernameGenerator(static::getAbsoluteResourcePath());
    }

    public static function getAbsoluteResourcePath(): string
    {
        return sprintf('%s/Resources/', dirname(__FILE__));
    }
}