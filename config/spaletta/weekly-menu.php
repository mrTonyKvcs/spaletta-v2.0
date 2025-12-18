<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.12.17. - 2025.12.19.',
    'saturday-date' => '2025.12.20.',
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
                    'name'  => 'Olasz zöldségleves, arancini, parmezán(1,3,7,9)',
                    'price' => 1480
                ],
                [
                    'name'  => 'Tárkonyos csirkeraguleves, burgonyagombóc(1,3,7,9,10)',
                    'price' => 1580
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Brassói, csalamádé(10)',
                    'price' => 2560
                ],
                [
                    'name' => 'Borzas csirkemell, fűszeres tejföl, rizibizi(1,3,7)',
                    'price' => 2590
                ],
                [
                    'name' => 'Grillezett zöldségnyárs, tabbouleh(1,5,6,11)',
                    'price' => 2460
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Szilvás-mákos palacsinta(1,3,7)',
                    'price' => 1460
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
                        'name'  => 'Grízgaluska leves(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Csülkös pacalpörkölt, köményes burgonya',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Almás rétes, vanília espuma(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
