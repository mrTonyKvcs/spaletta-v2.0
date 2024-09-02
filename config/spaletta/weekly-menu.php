<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.09.04. - 2024.09.06.',
    'saturday-date' => '2024.09.07.',
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
                    'name'  => 'Őszibarack krémleves, marinált barack',
                    'price' => 1150
                ],
                [
                    'name'  => 'Salátaleves, bacon, kapor (1,7)',
                    'price' => 1250
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Zöldbabfőzelék, fasírt (1,3,7)',
                    'price' => 2450
                ],
                [
                    'name' => 'Zöldbab főzelék, fasírt (1,3,7)',
                    'price' => 2450
                ],
                [
                    'name' => 'Töltött paprika, gersli, paradicsom (1,9)',
                    'price' => 2250
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Hideg tejberizs, zöld dió, mandula (7,8)',
                    'price' => 1050
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 4950,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Gombaleves (9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Csülök pékné, kovászos uborka (1)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Citromos piskótácska, mascarpone, bazsalikom',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
