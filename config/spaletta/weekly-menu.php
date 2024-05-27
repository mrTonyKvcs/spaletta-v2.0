<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.05.29. - 2024.05.31.',
    'saturday-date' => '2024.06.01.',
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
                    'name'  => 'Eperleves, bazsalikom, menta granita',
                    'price' => 1300
                ],
                [
                    'name'  => 'Minestrone (9)',
                    'price' => 1400
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rizseshús, kovászos uborka (1)',
                    'price' => 2400
                ],
                [
                    'name' => 'Pad thai, tofu (3,4,5,6)',
                    'price' => 2400
                ],
                [
                    'name' => 'Gnocchi, paraj, parmezán (1,3,7)',
                    'price' => 2200
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Tejberizs, karamell, zöld dió (7)',
                    'price' => 1200
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
                        'name'  => 'Zöldborsó leves, vajas galuska (1,3)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Cigánypecsenye, steak burgonya (1,10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Tarte tatin, vanília fagylalt (1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
