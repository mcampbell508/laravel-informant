<?php declare(strict_types=1);

namespace MattCampbell\Laravel\Informant\Process;

use Symfony\Component\Process\Process as SymfonyProcess;

final class Process extends SymfonyProcess implements ProcessInterface
{
    public function getOutput()
    {
        return trim(parent::getOutput());
    }
}
