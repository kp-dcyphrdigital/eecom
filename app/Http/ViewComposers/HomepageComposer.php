<?php

namespace App\Http\ViewComposers;

use App\Models\Banner;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class HomepageComposer
{
    /**
     * The Banner model
     *
     * @var Banner
     */
    protected $banners;

    /**
     * Create a new homepage composer.
     *
     * @param  Banner  $banners
     * @return void
     */
    public function __construct(Banner $banners)
    {
        $this->banners = $banners;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $banners = Cache::remember('banners', 1440, function() { 
            return $this->banners->all();
        });     
        $view->with(compact('banners'));
    }
}