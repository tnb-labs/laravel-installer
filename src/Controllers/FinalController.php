<?php

namespace TNB\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;
use TNB\LaravelInstaller\Events\LaravelInstallerFinished;
use TNB\LaravelInstaller\Helpers\EnvironmentManager;
use TNB\LaravelInstaller\Helpers\FinalInstallManager;
use TNB\LaravelInstaller\Helpers\InstalledFileManager;

class FinalController extends Controller
{
    /**
     * Update installed file and display finished view.
     *
     * @param \TNB\LaravelInstaller\Helpers\InstalledFileManager $fileManager
     * @param \TNB\LaravelInstaller\Helpers\FinalInstallManager $finalInstall
     * @param \TNB\LaravelInstaller\Helpers\EnvironmentManager $environment
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function finish(InstalledFileManager $fileManager, FinalInstallManager $finalInstall, EnvironmentManager $environment)
    {
        $finalMessages = $finalInstall->runFinal();
        $finalStatusMessage = $fileManager->update();
        $finalEnvFile = $environment->getEnvContent();

        event(new LaravelInstallerFinished);

        return view('vendor.installer.finished', compact('finalMessages', 'finalStatusMessage', 'finalEnvFile'));
    }
}
