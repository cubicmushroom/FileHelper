<?php

namespace CubicMushroom\FileHelper\Component;

class Directory
{
    public function rmdir($dir) {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir."/".$object) == "dir") self::rmdir($dir."/".$object); else unlink($dir."/".$object);
                }
            }
            reset($objects);
            rmdir($dir);
        }
    }
}