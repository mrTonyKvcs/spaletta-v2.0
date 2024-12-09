<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.12.11. - 2024.12.13.',
    'saturday-date' => '2024.12.14.',
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
                    'name'  => 'Zöldbableves, kápia, kapor',
                    'price' => 1370
                ],
                [
                    'name'  => 'Currys csirkeleves, roppanós zöldségek(2,4,9)',
                    'price' => 1480
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Erdélyi rakott káposzta(3,7)',
                    'price' => 2580
                ],
                [
                    'name' => 'Szalonnás burgonya, hagymás mangalica zsír, tojás(3)',
                    'price' => 2200
                ],
                [
                    'name' => 'Sült répa, zöld curry, rizslepény(4)',
                    'price' => 2340
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Cantuccini, kávé, mascarpone(1,3,7,8)',
                    'price' => 1280
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5390,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Húsleves, cérnametélt, zöldségek(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rakott burgonya(3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Szilvás bukta, szőlő sabayon(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
