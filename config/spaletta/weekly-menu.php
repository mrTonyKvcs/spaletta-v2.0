<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.06.12. - 2024.06.14.',
    'saturday-date' => '2024.06.15.',
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
                    'name'  => 'Citromleves, bazsalikom (7)',
                    'price' => 1400
                ],
                [
                    'name'  => 'Tárkonyos csirkeraguleves (1,7,9,10)',
                    'price' => 1500
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Ropogós császár, vadas, szalvéta gombóc (1,3,7,9,10)',
                    'price' => 2500
                ],
                [
                    'name' => 'Csirkecomb filé, puttanesca, jázmin rizs (4)',
                    'price' => 2300
                ],
                [
                    'name' => 'Portobello, vajbab, paradicsom',
                    'price' => 2100
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Tiramisu, cantuccini, málna (1,3,7)',
                    'price' => 1100
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 4900,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Gazpacho, uborka, paradicsom (1)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Brassói, kovászos uborka (1)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Palacsinta, vanília sodó (1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
