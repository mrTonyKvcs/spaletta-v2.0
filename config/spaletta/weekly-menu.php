<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.11.26. - 2025.11.28.',
    'saturday-date' => '2025.11.22.',
    'hide' => false,
    'menu' => [
        // 'first-courses' => [
        //     'name' => 'Előétel',
        //     'items' => [
        //         [
        //             'name'  => 'Kacsás gyoza, hoisin, káposzta',
        //             'price' => 1200
        //         ]
        //     ]
        // ],
        'soup' => [
            'name' => 'Leves',
            'items' => [
                [
                    'name'  => 'Vaddisznó raguleves',
                    'price' => 1560
                ],
                [
                    'name'  => 'Magyaros gombaleves, reszelt tészta',
                    'price' => 1340
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Sertéspörkölt, lencsefőzelék',
                    'price' => 2560
                ],
                [
                    'name' => 'Ragacsos csirkecomb, jázminrizs, kimchi',
                    'price' => 2570
                ],
                [
                    'name' => 'Rántott zöldségek, petrezselymes bulgur, tartár',
                    'price' => 2420
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Túró́s tejespite, baracklekvár',
                    'price' => 1370
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => true,
        'price' => 5380,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Tyúkhúsleves,cérnametélt(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Székelykáposzta,tejföl(7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Almás palacsinta,vanília sodó(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
