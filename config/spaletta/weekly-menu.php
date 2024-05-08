<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.05.08. - 2024.05.10.',
    'saturday-date' => '2024.05.11.',
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
                    'name'  => 'Ribizli-rebarbara, gyömbér',
                    'price' => 1300
                ],
                [
                    'name'  => 'Gulyásleves, csipetke (1,3,9)',
                    'price' => 1500
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Ropogós császár, gyöngybab, paradicsom (10)',
                    'price' => 2500
                ],
                [
                    'name' => 'Házi tagliatelle, lazac, paraj (1,3,4,7)',
                    'price' => 2400
                ],
                [
                    'name' => 'Langyos tökfőzelék, kapor, sült kápia (7)',
                    'price' => 2200
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Granola, körte, joghurt (1,5,7)',
                    'price' => 1200
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
                        'name'  => 'Brokkoli krémleves, feta, turbolya (7)',
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
                        'name' => 'Citromos piskóta, málna, mascarpone (1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
