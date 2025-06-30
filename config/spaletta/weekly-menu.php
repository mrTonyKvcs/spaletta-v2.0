<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.07.01. - 2025.07.04.',
    'saturday-date' => '2025.07.05.',
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
                    'name'  => 'Görög gyümölcsleves(7)',
                    'price' => 1530
                ],
                [
                    'name'  => 'Tárkonyos csirkeraguleves(1,7,9,10)',
                    'price' => 1590
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Ragacsos sertéstarja, hideg csípős káposzta(1,4,5,6,11)',
                    'price' => 2680
                ],
                [
                    'name' => 'Grillezett csirkecomb filé, grill zöldség, bulgur(1,4,6,11)',
                    'price' => 2580
                ],
                [
                    'name' => 'Tojásos nokedli, fejes saláta(1,3)',
                    'price' => 2390
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Palacsinta, citrusos túrókrém, karamellizált barack(1,3,7)',
                    'price' => 1350
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5690,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Zöldborsó leves, reszelt tészta(1,3,7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Cheddarral, jalapenoval töltött csirkemell, burgonyapüré(1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Meggyes rétes(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
