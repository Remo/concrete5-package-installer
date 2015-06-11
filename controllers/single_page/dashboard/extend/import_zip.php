<?php

namespace Concrete\Package\PackageInstaller\Controller\SinglePage\Dashboard\Extend;

use Core,
    Loader,
    Package,
    Less_Parser,
    \Concrete\Core\Page\Controller\DashboardPageController;

class ImportZip extends DashboardPageController
{
    public function upload()
    {
        $zip = new \ZipArchive;
        if ($zip->open($_FILES['file']['tmp_name']) === TRUE) {
            $zip->extractTo(DIR_PACKAGES . '/' . basename($_FILES['file']['name'], '.zip'));
            $zip->close();
            
            $this->redirect('/dashboard/extend/install');
        }
        die();
    }
}