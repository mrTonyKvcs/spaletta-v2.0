<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.07.24. - 2024.07.26.',
    'saturday-date' => '2024.07.27.',
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
                    'name'  => 'Gazpacho, zöldségek, bazsalikom(1)',
                    'price' => 1250
                ],
                [
                    'name'  => 'Vietnámi csípős-savanyú leves, csirkemell(3,4,6)',
                    'price' => 1350
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Chilisbab, tortilla',
                    'price' => 2490
                ],
                [
                    'name' => 'Csirkecomb saslik, saláta, füge(11)',
                    'price' => 2390
                ],
                [
                    'name' => 'Grillezett cukkíni, hummus, sumach',
                    'price' => 2190
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Barack, zölddió, mascarpone(7)',
                    'price' => 1090
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 4890,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Sertés raguleves, tárkony, burgonya gombóc (1,3,7,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rántott patiszon, rizibizi, tartár (1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Barackos cobbler, tejszín (1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
