<?php
/*
=================================================
CMS Name  :  DOPTOR
CMS Version :  v1.2
Available at :  www.doptor.org
Copyright : Copyright (coffee) 2011 - 2015 Doptor. All rights reserved.
License : GNU/GPL, visit LICENSE.txt
Description :  Doptor is Opensource CMS.
===================================================
*/
class UserGroup extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_groups';

	protected $guarded = [];

    public static function all_groups()
    {
        $groups = [];
        foreach (Sentry::findAllGroups() as $group) {
            $groups[$group->id] = $group->name;
        }
        return $groups;
    }

    public static function access_areas()
    {
        return [
                'resourceful' =>  [
                    'user-groups'       => 'User Groups',
                    'users'             => 'User Manager',
                    'menu-positions'    => 'Menu Positions',
                    'menu-categories'   => 'Menu Categories',
                    'menu-manager'      => 'Menu Manager',
                    'languages'         => 'Languages',
                    'slideshow'         => 'Slidehow',
                    'pages'             => 'Pages',
                    'page-categories'   => 'Page Categories',
                    'posts'             => 'Posts',
                    'post-categories'   => 'Post Categories',
                    'media-manager'     => 'Media Manager',
                    'form-categories'   => 'Form Categories',
                    'form-builder'      => 'Form Builder',
                    'module-builder'    => 'Module Builder',
                    'report-builder'    => 'Report Builder',
                    'report-generators' => 'Report Generators',
                ],
                'others' => [
                    'theme-manager'   => [
                            'apply'   => 'Apply Theme',
                            'index'   => 'List All Themes',
                            'create'  => 'Install Theme',
                            'destroy' => 'Delete Theme'
                        ],
                    'modules'   => [
                            'index'   => 'List All Modules',
                            'create'  => 'Install Module',
                            'destroy' => 'Delete Module'
                        ],
                    'synchronize'     => [
                            'index'        => 'Show Options',
                            'local-to-web' => 'Local To Web',
                            'web-to-local' => 'Web To Local'
                        ],
                    'config'          => [
                            'edit' => 'Edit Configuration Settings'
                        ]
                ],
                'modules' => Module::lists('name', 'alias')
            ];
    }
}
