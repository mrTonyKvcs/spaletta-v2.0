<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.02.12. - 2025.02.14.',
    'saturday-date' => '2025.02.15.',
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
                    'name'  => 'Minestrone, arborio(9)',
                    'price' => 1450
                ],
                [
                    'name'  => 'Erdélyi csorbaleves, húsgombóc(3,7,9)',
                    'price' => 1590
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Lencsefőzelék, sertéspöri(1,4,7,10)',
                    'price' => 2670
                ],
                [
                    'name' => 'Csirkenyárs, hummus, tabulé(1,5,7,9,11)',
                    'price' => 2580
                ],
                [
                    'name' => 'Rántott sajt, jázminrizs, tartár(1,3,7,10)',
                    'price' => 2480
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Palacsinta, áfonya, vanília espuma(1,3,7)',
                    'price' => 1240
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5480,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Orjaleves, cérnametélt(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Paradicsomos húsgombóc, főtt burgonya(3,9)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Somlói(1,3,7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
