<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class WelcomeWidget extends Widget
{
    protected static string $view = 'filament.widgets.welcome-widget';

    protected static ?int $sort = 0;

    protected function getViewData(): array
    {
        $user = Auth::user();

        $timeOfDay = 'day';
        $hour = Carbon::now()->hour;

        if ($hour < 12) {
            $timeOfDay = 'morning';
        } elseif ($hour < 17) {
            $timeOfDay = 'afternoon';
        } else {
            $timeOfDay = 'evening';
        }

        $quotes = [
            'The best way to predict the future is to create it.',
            "Quality is not an act, it's a habit.",
            'Success is not the key to happiness. Happiness is the key to success.',
            "Productivity is never an accident. It's the result of a commitment to excellence.",
            'The secret of getting ahead is getting started.'
        ];

        return [
            'name' => $user->nama,
            'timeOfDay' => $timeOfDay,
            'quote' => $quotes[array_rand($quotes)],
            'date' => Carbon::now()->format('l, F j, Y'),
        ];
    }
}
