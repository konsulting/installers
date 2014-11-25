<?php
namespace Composer\Installers;

class KontentTenInstaller extends BaseInstaller
{
    protected $locations = array(
        'core'  => '{$name}/',
    );
}
