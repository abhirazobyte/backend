<?php

$file = dirname(__DIR__).'/vendor/nesbot/carbon/src/Carbon/Traits/Creator.php';

if (!is_file($file)) {
    fwrite(STDERR, "Carbon Creator.php not found; skip patch.\n");
    exit(0);
}

$source = file_get_contents($file);

if (strpos($source, 'if (!is_array($lastErrors))') !== false) {
    echo "Carbon PHP 8.2 patch already applied.\n";
    exit(0);
}

$old = <<<'PHP'
    private static function setLastErrors(array $lastErrors)
    {
        static::$lastErrors = $lastErrors;
    }
PHP;

$new = <<<'PHP'
    private static function setLastErrors($lastErrors)
    {
        if (!is_array($lastErrors)) {
            static::$lastErrors = [
                'warning_count' => 0,
                'warnings' => [],
                'error_count' => 0,
                'errors' => [],
            ];

            return;
        }

        static::$lastErrors = $lastErrors;
    }
PHP;

if (strpos($source, $old) === false) {
    fwrite(STDERR, "Carbon setLastErrors() did not match expected 2.54 source; skip patch.\n");
    exit(0);
}

file_put_contents($file, str_replace($old, $new, $source));
echo "Patched Carbon for PHP 8.2 getLastErrors() returning false.\n";
