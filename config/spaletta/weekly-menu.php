<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.05.07. - 2025.05.09.',
    'saturday-date' => '2025.05.10.',
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
                    'name'  => 'Cukkini krémleves, padlizsán krokett, kapor(1,3,7)',
                    'price' => 1460
                ],
                [
                    'name'  => 'Székelygulyás(7,9)',
                    'price' => 1570
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Erdei gombás tarja, specli(1,3,7)',
                    'price' => 2690
                ],
                [
                    'name' => 'Füstös csirke hortobágyi, csepegtetett tejföl(1,3,7)',
                    'price' => 2580
                ],
                [
                    'name' => 'Grillezett camembert, friss saláta, eper, spárga(7)',
                    'price' => 2530
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Répatorta, yuzus mascarpone(1,3,7,8)',
                    'price' => 1390
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5490,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Citromleves, pomelo, menta(7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Mustáros flekken, steak burgonya, lyoni hagyma(1,10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Fehércsoki mousse, málna, pisztácia, mandula strőzel(1,7,8,)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
