<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/hexi-share-config/src/SmartyConfig/Hx',
            S_ROOT.'vendor/qixinyun/hexi-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/hexi-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
