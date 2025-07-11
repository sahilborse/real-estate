<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * URIs that should be excluded from CSRF verification.
     */
    protected $except = [
        // Add routes like '/api/*' or '/submit-form' here if needed
        'properties/*', // Example: Exclude all property routes from CSRF verification
    ];
}
