<?php

namespace MattCampbell\Tests\Process;

use MattCampbell\Laravel\Informant\Process\ProcessFactory;
use MattCampbell\Laravel\Informant\Process\ProcessInterface;
use PHPUnit\Framework\TestCase;

class ProcessFactoryTest extends TestCase
{
    public function testCreateProcessFactory()
    {
        $this->assertInstanceOf(ProcessInterface::class, (new ProcessFactory())->create('command'));
    }
}
