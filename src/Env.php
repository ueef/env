<?php

namespace Ueef\Env {

    use Ueef\Env\Interfaces\EnvInterface;

    class Env implements EnvInterface
    {
        /** @var integer */
        private $env;


        public function __construct(int $env)
        {
            $this->env = $env;
        }

        public function is(int $env): bool
        {
            return $env === $this->env;
        }
    }
}
