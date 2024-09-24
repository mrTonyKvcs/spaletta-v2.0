<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.09.25. - 2024.09.27.',
    'saturday-date' => '2024.09.28.',
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
                    'name'  => 'Karfiol leves, pirított karfiol, fűszeres mogyoró (7,8)',
                    'price' => 1150
                ],
                [
                    'name'  => 'Burgonya leves, lángolt kolbász, tárkony',
                    'price' => 1250
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Hentes tarja, burgonyapüré (7)',
                    'price' => 2450
                ],
                [
                    'name' => 'Borzas csirkemell, jázmin rizs, fokhagymás tejföl (1,3,7)',
                    'price' => 2250
                ],
                [
                    'name' => 'Tagliatelle, ricotta, paraj (1,3,7)',
                    'price' => 2150
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Brownie, vanília fagylalt (1,3,7)',
                    'price' => 1050
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5000,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Cukkíni krémleves, kapor, paradicsom',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Kacsazúza pörkölt, tarhonya (1,3)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Máglyarakás (1,3,7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
