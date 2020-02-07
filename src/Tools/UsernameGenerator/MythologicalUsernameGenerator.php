<?php

namespace Comsave\Tools\UsernameGenerator;

class MythologicalUsernameGenerator
{
    private const ADJECTIVES_FILE_PATH = 'adjectives.txt';
    private const GREEK_NAMES_FILE_PATH = 'greek_names.txt';

    /** @var string */
    private $absoluteResourcePath;

    /**
     * @codeCoverageIgnore
     */
    public function __construct(string $absoluteResourcePath)
    {
        $this->absoluteResourcePath = $absoluteResourcePath;
    }

    public function generateUsername(?int $seed = null): string
    {
        srand($seed);

        // todo: move out to github
        return sprintf('%s%s%s',
            $this->getRandomLineFromWordFile(static::ADJECTIVES_FILE_PATH),
            $this->getRandomLineFromWordFile(static::GREEK_NAMES_FILE_PATH),
            rand(1, 99)
        );
    }

    private function getRandomLineFromWordFile($relativePath): string
    {
        // todo: add cache or make some other method to load

        $lines = file(sprintf('%s/%s', $this->absoluteResourcePath, $relativePath));

        return $lines[array_rand($lines)];
    }
}
