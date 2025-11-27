<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.11.26. - 2025.11.28.',
    'saturday-date' => '2025.11.29.',
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
        'hide' => false,
        'price' => 5580,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Tejfölös karfiol leves(7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Chilisbab, házi tortilla',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Répatorta(1,3,7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
