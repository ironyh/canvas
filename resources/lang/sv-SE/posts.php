<?php

return [

    'header'  => 'Posts',
    'empty'   => [
        'description' => 'Inga inlägg hittades, börja med att',
        'action'      => 'lägga till ett nytt inlägg',
    ],
    'search'  => [
        'input' => 'Sök genom titeln',
        'empty' => 'Inga inlägg hittades med dina sökkriterier.',
    ],
    'details' => [
        'published' => 'Publicerad',
        'draft'     => 'Utkast',
        'updated'   => 'Uppdaterad',
        'scheduled' => 'Shchemalagd',
    ],
    'forms'   => [
        'editor'   => [
            'title'  => 'Titel',
            'body'   => 'Berätta din...',
            'link'   => 'Klistra in eller skriv in en länk...',
            'html'   => [
                'label'       => 'Lägg till HTML',
                'placeholder' => 'Klistra in din HTML här',
            ],
            'images' => [
                'featured' => [
                    'title'       => 'Text till bilden som är Feeatured',
                    'placeholder' => 'Lägg till en text om din bild',
                ],
                'picker'   => [
                    'greeting'    => 'Vänligen',
                    'action'      => 'ladda upp',
                    'item'        => 'en bild',
                    'operator'    => 'eller',
                    'unsplash'    => 'sök på Unsplash',
                    'key'         => 'Konfigurera din Unsplash API Nyckel.',
                    'placeholder' => 'Sök högupplösta bilder',
                    'clear'       => [
                        'action'      => 'Ta bort',
                        'description' => 'den valda bilden',
                    ],
                    'caption'     => [
                        'by' => 'Foto av',
                        'on' => 'på',
                    ],
                    'search'      => [
                        'empty' => 'Konde inte hitta någon matchning på din sökning.',
                    ],
                    'uploader'    => [
                        'label'   => 'Lägg upp bild',
                        'caption' => [
                            'placeholder' => 'Fyll i en bildtext till bilden',
                        ],
                        'layout'  => [
                            'default' => 'Standardlayout',
                            'wide'    => 'Bred bild',
                        ],
                    ],
                ],
            ],
        ],
        'image'    => [
            'header' => 'Featured bild',
        ],
        'publish'  => [
            'header'  => 'Publiceringsdatum (m/d/y h:m)',
            'subtext' => [
                'details'  => 'Schemaläggning för bilder använder ett 24-timmarsformat och använder sig av',
                'timezone' => 'tidszon',
            ],
        ],
        'seo'      => [
            'header'    => 'SEO & Socialt',
            'meta'      => 'Meta Beskrivning',
            'facebook'  => [
                'title'       => [
                    'label'       => 'Facebooks kort titel',
                    'placeholder' => 'Titeln på facebook kortet',
                ],
                'description' => [
                    'label'       => 'Facebboks beskrivning',
                    'placeholder' => 'Beskrivning på kortet på Facebook',
                ],
            ],
            'twitter'   => [
                'title'       => [
                    'label'       => 'Twitter Card Title',
                    'placeholder' => 'Title in Twitter Card',
                ],
                'description' => [
                    'label'       => 'Twitter Card Description',
                    'placeholder' => 'Description in Twitter Card',
                ],
            ],
            'canonical' => [
                'label'       => 'Canonical',
                'placeholder' => 'Canonical URL of original source',
            ],
            'sync'      => [
                'title'       => 'Sync with the post title',
                'description' => 'Sync with the post summary',
            ],
        ],
        'settings' => [
            'header'  => 'General settings',
            'slug'    => [
                'label'       => 'Slug',
                'placeholder' => 'a-unique-slug',
            ],
            'summary' => [
                'label'       => 'Summary',
                'placeholder' => 'A descriptive summary..',
            ],
            'topic'   => [
                'label' => 'Topic',
            ],
            'tags'    => [
                'label' => 'Tags',
            ],
        ],
    ],
    'delete'  => [
        'header'  => 'Delete',
        'warning' => 'Deleted posts are gone forever. Are you sure?',
    ],

];
