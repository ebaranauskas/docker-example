<?php

declare(strict_types=1);

namespace App;

final class Stuff
{
    public function increase(int $value): int
    {
        return $value + 1;
    }
}
