<?php

namespace App\Http\ViewComposers;

use App\Banner;
use Illuminate\View\View;

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
        $view->with('banners', $this->banners->all() );
    }
}