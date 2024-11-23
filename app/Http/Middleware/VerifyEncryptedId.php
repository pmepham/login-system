<?php

namespace App\Http\Middleware;

use App\Helpers\EncryptionHelper;
use Closure;
use DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyEncryptedId
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $encryptedId = $request->route('id'); // Assuming the 'id' parameter is in the route
        if (!$encryptedId) {
            abort(404, 'Page not found');
        }

        // Decode the masked ID
        $decryptedId = EncryptionHelper::decrypt($encryptedId);

        if (empty($decryptedId)) {
            abort(404, 'Page not found');
        }

        // Check if the decoded ID exists in the 2fa table
        $exists = DB::table('two_factor_tokens')->where('id', $decryptedId)->exists();
        
        if (!$exists) {
            abort(404, 'Authentication Code has expired');
        }

        // Add the decoded ID to the request object for downstream usage
        $request->attributes->set('encrypted_id', $encryptedId);
        $request->attributes->set('decrypted_id', $decryptedId);

        return $next($request);
    }
}
