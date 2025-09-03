<?php

declare(strict_types=1);

namespace Pest\FilamentAuth;

pest()->preset('testAuth', function () {
    return [
        expect(true)->toBeTrue(),
    ];
});