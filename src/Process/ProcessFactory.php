<?php declare(strict_types=1);

namespace MattCampbell\Laravel\Informant\Process;

use Symfony\Component\Process\Process as SymfonyProcess;

final class ProcessFactory implements ProcessFactoryInterface
{
    public function create(
        $commandLine,
        $cwd = null,
        array $env = null,
        $input = null,
        $timeout = 60,
        array $options = []
    ): Process {
        return new Process(
            $commandLine,
            $cwd,
            $env,
            $input,
            $timeout,
            $options
        );
    }
}
