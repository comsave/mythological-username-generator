<?php

namespace Comsave\Tools\UsernameGenerator;

class MythologicalUsernameGeneratorBuilder
{
    public function build(): MythologicalUsernameGenerator
    {
        return new MythologicalUsernameGenerator($this->getAbsoluteResourcePath());
    }

    public function getAbsoluteResourcePath(): string
    {
        return  sprintf('%s/Resources/', dirname(__FILE__));
    }
}