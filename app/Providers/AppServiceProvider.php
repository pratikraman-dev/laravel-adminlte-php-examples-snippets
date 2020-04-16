<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot(Dispatcher $events)
    {

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $item =
                [
                    'text' => 'Calendar',
                    'url' => '#',
                    'icon' => 'nav-icon far fa-calendar-alt',
                    'label' => 2,
                    'label_color' => 'primary',
                ];
            $event->menu->add('MAIN NAVIGATION');
            $event->menu->add($item);

            $event->menu->add([
                'text' => 'Blog',
                'url' => 'admin/blog',
            ],
                [
                    'text' => 'test',
                    'url' => 'admin/blog',
                ]

            );
        });
    }

}