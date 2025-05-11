<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.05.14. - 2025.05.16.',
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
                    'name'  => 'Sáfrányos almaleves, eper, bazsalikom',
                    'price' => 1430
                ],
                [
                    'name'  => 'Palócleves, burgonyagombóc(1,3,7,9,10)',
                    'price' => 1560
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Szalonnás újburgonya, hagymás mangalicazsír, onsen tojás(3)',
                    'price' => 2370
                ],
                [
                    'name' => 'Rántott csirkecomb filé, jázminrizs, szilvakompót(1,3)',
                    'price' => 2590
                ],
                [
                    'name' => 'Humusz, pirított cukkini, konfitált koktélparadicsom, tabulé(1,11)',
                    'price' => 2460
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Túrógombóc, eper, karamellizált morzsa(1,3,7)',
                    'price' => 1380
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => true,
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
