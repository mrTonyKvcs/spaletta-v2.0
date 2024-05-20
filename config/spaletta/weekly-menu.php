<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.05.22. - 2024.05.24.',
    'saturday-date' => '2024.05.25.',
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
                    'name'  => 'Ajo blanco, uborka, paradicsom (8)',
                    'price' => 1300
                ],
                [
                    'name'  => 'Frankfurti leves (1,7)',
                    'price' => 1450
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Sertés dagadó, burgonya, cukkíni, szalonna',
                    'price' => 2500
                ],
                [
                    'name' => 'Ponty tempura, tavaszi saláta, jalapeno vinegrette (4)',
                    'price' => 2400
                ],
                [
                    'name' => 'Laskagomba, labneh, sumach, naan (7)',
                    'price' => 2200
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Gundel palacsinta(1,3,7,8)',
                    'price' => 1100
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 4800,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Lebbencs leves, tavaszi zöldségek(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rakott krumpli(3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Málna, csoki, keksz morzsa(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
