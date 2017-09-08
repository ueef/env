<?php

namespace Ueef\Env\Interfaces {

    interface EnvInterface
    {
        const DEV = 1;
        const PPD = 2;
        const PRD = 3;

        public function is(int $env): bool;
    }
}
