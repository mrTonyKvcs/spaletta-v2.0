<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.07.03. - 2024.07.05.',
    'saturday-date' => '2024.07.06.',
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
                    'name'  => 'Ajo blanco, sárgadinnye, olíva olaj (8)',
                    'price' => 1300
                ],
                [
                    'name'  => 'Gulyásleves, csipetke (1,3,9)',
                    'price' => 1500
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Sertés cordon, rizibizi (1,3,7)',
                    'price' => 2400
                ],
                [
                    'name' => 'Joghurtos csirkenyárs, nyári zöldsaláta (7)',
                    'price' => 2400
                ],
                [
                    'name' => 'Lecsó, onsen tojás (3)',
                    'price' => 2200
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Madártej, karamell (3,7)',
                    'price' => 1200
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
                        'name'  => 'Orja leves, cérnametélt (1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'BBQ oldalas, steak burgonya, coleslaw (1,3,6,7,10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Cantuccini, mascarpone, citrom (1,3,7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
