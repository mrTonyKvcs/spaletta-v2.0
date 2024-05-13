<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.05.15. - 2024.05.17.',
    'saturday-date' => '2024.05.18.',
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
                    'name'  => 'Saláta leves, sonka, kapor (7)',
                    'price' => 1300
                ],
                [
                    'name'  => 'Tyúkhúsleves, cérnametélt, zöldségek (1,3,9)',
                    'price' => 1500
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Füstön sült húsgombóc, zöldbab, kápia, paprikás szaft (7)',
                    'price' => 2400
                ],
                [
                    'name' => 'Csirkecomb teriyaki, zöldséges sült rizs (1,6,11)',
                    'price' => 2400
                ],
                [
                    'name' => 'Zöldborsófőzelék, sajtos bundáskenyér (1,3,7)',
                    'price' => 2100
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Crumble, eper, rebarbara, tejszín (1,3,7)',
                    'price' => 1300
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
                        'name'  => 'Burgonyaleves, lángolt kolbász, tárkony',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Resztelt kacsamáj, burgonya, házi csalamádé (10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Szilvás pite, vanília, tejszín (1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
