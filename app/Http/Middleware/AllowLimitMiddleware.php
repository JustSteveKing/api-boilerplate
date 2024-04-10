<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final class AllowLimitMiddleware
{
    /**
     * @param Request $request
     * @param Closure(Request): (Response) $next
     * @param string ...$allows
     * @return Response
     */
    public function handle(Request $request, Closure $next, string ...$allows): Response
    {
        $response = $next($request);

        $response->headers->set(
            key: 'Allow',
            values: implode(', ', $allows),
            replace: true,
        );

        return $response;
    }
}
