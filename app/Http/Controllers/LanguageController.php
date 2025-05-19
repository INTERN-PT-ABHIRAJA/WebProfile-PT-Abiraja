<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class LanguageController extends Controller
{
    /**
     * Switch between languages
     *
     * @param Request $request
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchLang(Request $request, $locale)
    {
        // Check if the locale is supported
        if (in_array($locale, ['en', 'id'])) {
            App::setLocale($locale);
            Session::put('locale', $locale);

            // Flash success message
            session()->flash('locale_changed', true);
            session()->flash('locale_name', locale_name($locale));
        }

        // Get the previous URL
        $previousUrl = URL::previous();

        // If previous URL is a specific route that shouldn't be redirected back to,
        // like login or logout, redirect to home page
        $nonRedirectableRoutes = ['login', 'logout', 'register'];

        foreach ($nonRedirectableRoutes as $route) {
            if (strpos($previousUrl, $route) !== false) {
                return redirect('/');
            }
        }

        // Otherwise redirect back
        return redirect()->back();
    }
}
