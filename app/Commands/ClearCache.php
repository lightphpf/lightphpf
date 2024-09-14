<?php

declare(strict_types=1);

namespace App\Commands;

class ClearCache
{
    private $cacheDir;

    public function __construct()
    {
        // Get the location of the cache directory
        $this->cacheDir = dirname(dirname(__FILE__)) . '/Bootstrap/Cache';
    }

    /**
     * Execute CLI
     *
     * @return void
     * @throws \Throwable
     */
    public function run(): void
    {
        try {
            exec('sudo chown -R $(whoami) .');

            $this->clearCache($this->cacheDir);
            $this->createGitFile($this->cacheDir);

            dump("Cache Cleared Successfully\n");
        } catch (\Throwable $th) {
            dump('Something went wrong...');
        }
    }

    /**
     * @return void
     * Delete the contents of the cache directory
     */
    protected function clearCache(string $cacheDir): void
    {
        foreach (glob($cacheDir . '/*') as $file) {
            if (is_dir($file)) {
                $this->clearCache($file);
                rmdir($file);
            } else {
                unlink($file);
            }
        }
    }

    /**
     * @return void
     * create .gitignore file
     */
    protected function createGitFile(string $cacheDir): void
    {
        $txt = "*\n!.gitignore";
        file_put_contents("{$cacheDir}/.gitignore", $txt);
    }
}
