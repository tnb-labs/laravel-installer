<?php

namespace HaoZiTeam\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;
use HaoZiTeam\LaravelInstaller\Events\LaravelInstallerFinished;
use HaoZiTeam\LaravelInstaller\Helpers\EnvironmentManager;
use HaoZiTeam\LaravelInstaller\Helpers\FinalInstallManager;
use HaoZiTeam\LaravelInstaller\Helpers\InstalledFileManager;

class FinalController extends Controller
{
    /**
     * Update installed file and display finished view.
     *
     * @param \HaoZiTeam\LaravelInstaller\Helpers\InstalledFileManager $fileManager
     * @param \HaoZiTeam\LaravelInstaller\Helpers\FinalInstallManager $finalInstall
     * @param \HaoZiTeam\LaravelInstaller\Helpers\EnvironmentManager $environment
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
