OwnCloud Theme - Arte et Marte
==============================

Very simple theme for OwnCloud.

Directory structure.
--------------------

themes
└── arteetmarte
    ├── assets
    │   └── icons
    ├── core                    <── Overwrite default CSS, images, javascripts, and templates
    │   ├── css
    │   │   └── styles.css      <── Principal CSS file for overwrite CSS default styles
    │   ├── img                 <── Images of the theme; overwrite the default images
    │   │   ├── actions
    │   │   ├── filetypes
    │   │   ├── places
    │   │   └── rating
    │   └── templates           <── Templates of the theme; overwrite the defaults.
    │       ├── filetemplates
    │       └── lostpassword
    └── settings                <── Overwrite settings CSS, images, javascripts, and templates; not needed in fact.
        └── templates
            └── users

Reference.
----------

https://doc.owncloud.org/server/9.0/developer_manual/core/theming.html

Versions and apps.
------------------

Testing on owncloud 9.0.2.2

Debian 8 Jessie

    $ uname -a
    Linux hostname 3.16.0-4-amd64 #1 SMP Debian 3.16.7-ckt9-3~deb8u1 (2015-04-24) x86_64 GNU/Linux

    # apache2 -v
    Server version: Apache/2.4.10 (Debian)
    Server built:   Nov 28 2015 14:05:48

    # php -v
    PHP 5.6.20-0+deb8u1 (cli) (built: Apr 27 2016 11:26:05)
    Copyright (c) 1997-2016 The PHP Group
    Zend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies
    with Zend OPcache v7.0.6-dev, Copyright (c) 1999-2016, by Zend Technologies

    # mysql --version
    mysql  Ver 14.14 Distrib 5.5.49, for debian-linux-gnu (x86_64) using readline 6.3

Install.
--------

Simple clone on ./theme directory, fix permissions, and set the 'theme' variable to "arteetmarte", in the config/config.php


