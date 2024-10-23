<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.10.23. - 2024.10.25.',
    'saturday-date' => '2024.10.26.',
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
                    'name'  => 'Langyos őszibarack leves, fűszeres mandula(7,8)',
                    'price' => 1150
                ],
                [
                    'name'  => 'Tárkonyos csirkeraguleves, burgonyagombóc(1,3,7,9,10)',
                    'price' => 1350
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Kapros túróval töltött sertéskaraj, francia rakott burgonya(1,3,7)',
                    'price' => 2450
                ],
                [
                    'name' => 'Zöldfűszeres préselt csirkecomb filé, sült őszi zöldségek(3,7,9)',
                    'price' => 2350
                ],
                [
                    'name' => 'Vöröslencse dahl, naan kenyér(1,7)',
                    'price' => 2150
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Rizsfelfújt, gyümölcsragu(1,3,7)',
                    'price' => 950
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5100,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Minestrone leves(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Csülkös pacal, köményes burgonya',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Tökös-mákos rétes(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
