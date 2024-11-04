<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.11.06. - 2024.11.09.',
    'saturday-date' => '2024.11.02.',
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
                    'name'  => 'Birsalma leves (7)',
                    'price' => 1050
                ],
                [
                    'name'  => 'Nyírségi húsgombóc leves (1,3,7,9)',
                    'price' => 1250
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rakott zöldbab (3,7)',
                    'price' => 2350
                ],
                [
                    'name' => 'Rántott csirkecomb filé, burgonyapüré, körtekompót (1,3,7)',
                    'price' => 2350
                ],
                [
                    'name' => 'Zöldség tempura, ricotta, saláta (1,5,7,11)',
                    'price' => 2150
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Túrós lepény, barack ragu (1,3,7)',
                    'price' => 1050
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5100,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Tarhonyaleves (1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Ropogós császár, vadas, szalvétagombóc (1,3,7,9,11)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Birsalmás palacsinta (1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
