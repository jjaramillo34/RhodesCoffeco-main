<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'flash' => [
                'message' => fn () => $request->session()->get('message'),
                'exception' => fn () => $request->session()->get('exception')
            ],
            'app_info' => [
                'app_name' => 'Rhodes Coffee Co',
                'app_title' => 'Coffee Cart Catering | Mobile Espresso Bar | Central New York',
                'contact_email' => 'contact@rhodescoffeeco.com',
                'contact_phone' => '(315) 430-5996',
                'contact_address' => 'Pulaski, New Work',
                'social_media' => [
                    'facebook' => 'https://www.facebook.com/profile.php?id=100091245697148',
                    'instagram' => 'https://www.instagram.com/rhodescoffeeco',
                ]
            ]
        ]);
    }
}
