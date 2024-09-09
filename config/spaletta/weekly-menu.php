<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.09.11. - 2024.09.13.',
    'saturday-date' => '2024.09.14.',
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
                    'name'  => 'Tarhonyaleves (1,3)',
                    'price' => 1150
                ],
                [
                    'name'  => 'Tárkonyos csirkeragul eves (1,7,9)',
                    'price' => 1250
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rakott burgonya (3,7)',
                    'price' => 2450
                ],
                [
                    'name' => 'Rántott csirkemáj, rizibizi (1,3,7)',
                    'price' => 2350
                ],
                [
                    'name' => 'Tagliatelle, paradicsom, rukkola (1,3,7)',
                    'price' => 2250
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Füge, szőlő, mandula, tejszín (7,8)',
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
                        'name'  => 'Tyúkhúsleves, cérnametélt (1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Sertéspörkölt, galuska, tejfölös uborkasaláta (1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Barackos palacsinta (1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
