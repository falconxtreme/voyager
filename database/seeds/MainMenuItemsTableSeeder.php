<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MainMenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (file_exists(base_path('routes/web.php'))) {
            require base_path('routes/web.php');

            $menu = Menu::where('name', 'main')->firstOrFail();

            //HOME----------
            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Home',
                'url'        => '/',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'menu-icon glyphicon glyphicon-home',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 1,
                ])->save();
            }

            //ALARMAS--------
            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Alarmas',
                'url'        => '/alarms',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'menu-icon fa fa-clock-o',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 2,
                ])->save();
            }

            //REPORTES--------
            $reportsMenuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Reportes',
                'url'        => '/reports',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'menu-icon fa fa-file-text-o',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 3,
                ])->save();
            }

            //ITEM 1 - REPORTES --------
            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Acceso a internet',
                'url'        => '/rep-access-internet',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $reportsMenuItem->id,
                    'order'      => 4,
                ])->save();
            }

            //ITEM 2 - REPORTES --------
            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Acceso a intranet',
                'url'        => '/rep-access-intranet',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $reportsMenuItem->id,
                    'order'      => 5,
                ])->save();
            }

            //ITEM 3 - REPORTES --------
            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Interrupción de servicio',
                'url'        => '/rep-interruption',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $reportsMenuItem->id,
                    'order'      => 6,
                ])->save();
            }

            //ITEM 4 - REPORTES --------
            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Solicitudes recibidas',
                'url'        => '/req-receive',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $reportsMenuItem->id,
                    'order'      => 7,
                ])->save();
            }

            //ITEM 5 - REPORTES --------
            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Incidencias de averías',
                'url'        => '/rate-fault',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $reportsMenuItem->id,
                    'order'      => 8,
                ])->save();
            }

            //ITEM 6 - REPORTES --------
            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Ocupación de enlace',
                'url'        => '/rate-link',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $reportsMenuItem->id,
                    'order'      => 9,
                ])->save();
            }

            //ITEM 7 - REPORTES --------
            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Monitoreo de parámetros',
                'url'        => '/rep-monitor-params',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $reportsMenuItem->id,
                    'order'      => 10,
                ])->save();
            }

            //CALIDAD--------
            $calidadMenuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Calidad',
                'url'        => '/kpis-link',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'menu-icon fa fa-diamond',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 11,
                ])->save();
            }

            //ITEM 1 - CALIDAD --------
            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Beneficiario',
                'url'        => '/kpis-beneficiario',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $calidadMenuItem->id,
                    'order'      => 12,
                ])->save();
            }

            //ITEM 2 - CALIDAD --------
            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'MW Cambium',
                'url'        => '/kpis-mw-cambium',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $calidadMenuItem->id,
                    'order'      => 13,
                ])->save();
            }

            //ITEM 3 - CALIDAD --------
            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'SW Cisco',
                'url'        => '/kpis-sw-cisco',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $calidadMenuItem->id,
                    'order'      => 14,
                ])->save();
            }

            //ITEM 4 - CALIDAD --------
            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Plaza',
                'url'        => '/kpis-plaza',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $calidadMenuItem->id,
                    'order'      => 15,
                ])->save();
            }

            //ITEM 5 - CALIDAD --------
            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Enlace',
                'url'        => '/kpis-enlace',
                'route'      => '',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $calidadMenuItem->id,
                    'order'      => 16,
                ])->save();
            }
        }
    }
}
