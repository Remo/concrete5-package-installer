<?php

namespace Concrete\Package\PackageInstaller;

use Package,
    Concrete\Core\Page\Single;

class Controller extends Package
{

    protected $pkgHandle = 'package_installer';
    protected $appVersionRequired = '5.7.4';
    protected $pkgVersion = '0.9';

    public function getPackageName()
    {
        return t('Package Installer');
    }

    public function getPackageDescription()
    {
        return t('Allows you to install packages from ZIP files');
    }

    public function install()
    {
        $pkg = parent::install();
        Single::add("dashboard/extend/import_zip", $pkg);
        return $pkg;
    }


}
