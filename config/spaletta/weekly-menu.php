<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.01.24. - 2024.01.26.',
    'saturday-date' => '2024.01.27.',
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
                    'name'  => 'Bableves, füstölt csülök, csipetke',
                    'price' => 1500
                ],
                [
                    'name'  => 'Karfiol leves, pirított karfiol, fűszeres mogyoró',
                    'price' => 1300
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Sertés fasírt, burgonyafőzelék, tárkony',
                    'price' => 2600
                ],
                [
                    'name' => 'Csirkecomb filé, tom yum, pack choy',
                    'price' => 2500
                ],
                [
                    'name' => 'Tagliatelle, paradicsom, rukkola',
                    'price' => 2400
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Citromos piskóta, mascarpone, bazsalikom',
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
                        'name'  => 'Ázsiai húsleves, töltött wonton, roppanós zöldségek',
                        'price' => 1400
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Tengeri süllő, tom yum, misos sült répa',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Citromos piskóta, citsus sorbet, mascarpone, bazsalikom',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
