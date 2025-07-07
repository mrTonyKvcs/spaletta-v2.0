<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.07.09. - 2025.07.11.',
    'saturday-date' => '2025.07.12.',
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
                    'name'  => 'Sárgadinnye leves, marinált sárgadinnye(6,7,11)',
                    'price' => 1530
                ],
                [
                    'name'  => 'Orjaleves, cérnametélt(1,3,9)',
                    'price' => 1580
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Saslik, hagymás törtburgonya(1,5,11)',
                    'price' => 2590
                ],
                [
                    'name' => 'Rántott csirkemell, rizibizi, körtekompót(1,3,7)',
                    'price' => 2490
                ],
                [
                    'name' => 'Görögsaláta(7)',
                    'price' => 2390
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Citromos tiramisu(1,3,7)',
                    'price' => 1490
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5650,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Kovászosuborka-krémleves(1,7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Csirkecomb paprikás, galuska, ecetes almapaprika(1,3,10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Étcsoki, kókusz, málna(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
