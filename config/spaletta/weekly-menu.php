<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.02.14. - 2024.02.16.',
    'saturday-date' => '2024.02.17.',
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
                    'name'  => 'Burgonya krémleves, újhagyma, túrós pogácsa',
                    'price' => 1600
                ],
                [
                    'name'  => 'Mediterrán halleves, kovászos kenyér',
                    'price' => 2100
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Lassan sült sertés tarja, paradicsomos sült bab, sós citrom',
                    'price' => 2800
                ],
                [
                    'name' => 'Rántott csirkecomb filé, rizibizi',
                    'price' => 2600
                ],
                [
                    'name' => 'Muszaka, gersli, cukkíni, kápia',
                    'price' => 2300
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Szilvás nudli, karamellizált morzsa',
                    'price' => 1400
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5200,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Húsleves, cérnametélt, zöldségek',
                        'price' => 1400
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Brassói aprópecsenye, csalamádé',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Rákóczi túrós',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
