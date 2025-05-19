<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.05.21. - 2025.05.23.',
    'saturday-date' => '2025.05.24.',
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
                    'price' => 1460
                ],
                [
                    'name'  => 'Tárkonyos csirkeraguleves(1,7,9,10)',
                    'price' => 1520
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Tonkatsu, jázmin rizs, ázsiai uborkasaláta, tonkatsu szósz(1,3,6,10,11)',
                    'price' => 2580
                ],
                [
                    'name' => 'Aszaltparadicsommal, bazsalikommal töltött csirkemell, kevert zöldsaláta(7)',
                    'price' => 2580
                ],
                [
                    'name' => 'Lecsó, kovászos kenyér(1)',
                    'price' => 2390
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Madártej, pisztácia(3,7,8)',
                    'price' => 1290
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5300,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Borsóleves, vajas galuska(1,3,7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Csülök-köröm pörkölt, köményes újburgonya',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Citromos piskóta, tejfölös tejszín(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
