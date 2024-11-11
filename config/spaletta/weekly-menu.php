<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.11.13. - 2024.11.15.',
    'saturday-date' => '2024.11.16.',
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
                    'name'  => 'Magyaros gombaleves(7)',
                    'price' => 1250
                ],
                [
                    'name'  => 'Sárgaborsó krémleves, füstölt csülök',
                    'price' => 1380
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Mustáros flekken, lyoni hagyma steak burgonya(1,10)',
                    'price' => 2650
                ],
                [
                    'name' => 'Csirkecomb paprikás, galuska, tejfölös uborkasaláta(1,3,7)',
                    'price' => 2560
                ],
                [
                    'name' => 'Mézes sült répa, feta sajt, kesudió(7,8)',
                    'price' => 2340
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Nudli, diós morzsa, narancs, zöld dió(1,3,7,8)',
                    'price' => 1230
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5540,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Marhahúsleves, cérnametélt(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Zöldfűszeres csirkemell, sült őszi zöldségek, gránátalma(9)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Barackos crumble(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
