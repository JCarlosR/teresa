<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

use Closure;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    // override the default handle method
    public function handle($request, Closure $next)
    {
        if (
            $this->isReading($request) ||
            $this->runningUnitTests() ||
            $this->shouldPassThrough($request) ||
            $this->tokensMatch($request)
        ) {
            return $this->addCookieToResponse($request, $next($request));
        }

        // throw new TokenMismatchException;
        return back()->withInput($request->except('_token'))
            ->withErrors([
            'csrf_token_expired' => 'Oops, el formulario estuvo inactivo por mucho tiempo. Por favor inténtalo de nuevo.'
        ]);
    }
}
