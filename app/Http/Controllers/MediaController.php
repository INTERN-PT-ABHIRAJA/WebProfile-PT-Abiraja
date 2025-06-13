<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends BaseDashboardController
{
    public function __construct()
    {
        parent::__construct();
        $this->setModel(Media::class, 'media')
             ->setViewPath('dashboard.media')
             ->setRoutePrefix('dashboard.media');
    }
}
