<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.03.20. - 2024.03.22.',
    'saturday-date' => '2024.03.23.',
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
                    'name'  => 'Mediterrán halleves, kovászos kenyér (1,2,4,9)',
                    'price' => 1600
                ],
                [
                    'name'  => 'Bableves, füstölt csülök, csipetke (1,3,7,9)',
                    'price' => 1700
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Zöldborsó főzelék, medvehagyma, fasírt (1,3,7)',
                    'price' => 2500
                ],
                [
                    'name' => 'Rántott csirkecomb filé, hoisin, uborkasaláta (1,3,6,11)',
                    'price' => 2500
                ],
                [
                    'name' => 'Krumplis tészta (1,3)',
                    'price' => 2300
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Szilvás crumble, tejszín (1,3,7)',
                    'price' => 1200
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5300,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Húsleves, roppanós zöldségek, cérnametélt (1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Füstös csirke hortobágyi (1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Mézes körte, mascarpone, sós karamell, kesudió (7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
