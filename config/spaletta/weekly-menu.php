<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.03.13. - 2024.03.15.',
    'saturday-date' => '2024.03.16.',
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
                    'name'  => 'Medvehagyma leves, posírozott tojás',
                    'price' => 1500
                ],
                [
                    'name'  => 'Kókusztejes csirkeleves, laska gomba',
                    'price' => 1700
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Gulyásos hús, sült zöldségek',
                    'price' => 2700
                ],
                [
                    'name' => 'Ropogós ponty, sült rizs, kimchi',
                    'price' => 2600
                ],
                [
                    'name' => 'Tagliatelle, borsó, citrom',
                    'price' => 2400
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Rizskoch, rumos baracklekvár',
                    'price' => 1400
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5400,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Húsleves, cérnametélt, roppanós zöldségek',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Sült oldalas „Pékné”',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Túrógombóc, vaníliás tejföl',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
