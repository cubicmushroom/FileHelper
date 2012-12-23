<?php

namespace CubicMushroom\FileHelper;

use CubicMushroom\FileHelper\Component\Directory;
use CubicMushroom\FileHelper\Component\File;

class FileHelper
{
    protected $directory;
    protected $file;

    public function __construct()
    {
        $this->directory = new Directory();
        $this->file      = new File();
    }

    /**
     * @see CubicMushroom\FileHelper\Component\Directory::rrdir()
     */
    public function rrdir($dir)
    {
        $this->directory->rdir($dir);
    }
}