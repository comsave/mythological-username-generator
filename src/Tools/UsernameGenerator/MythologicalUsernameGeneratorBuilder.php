<?php

namespace Comsave\Tools\UsernameGenerator;

class MythologicalUsernameGeneratorBuilder
{
    public function build(): MythologicalUsernameGenerator
    {
        return new MythologicalUsernameGenerator(static::getAbsoluteResourcePath());
    }

    public static function getAbsoluteResourcePath(): string
    {
        return sprintf('%s/Resources/', dirname(__FILE__));
    }
}