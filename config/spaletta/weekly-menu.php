<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.11.27. - 2024.11.29.',
    'saturday-date' => '2024.11.30.',
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
                    'name'  => 'Hagymaleves, mustár, kovászos kenyér(1,4,7,10)',
                    'price' => 1370
                ],
                [
                    'name'  => 'Tárkonyos csirkeraguleves, burgonyagombóc(1,3,7,9,10)',
                    'price' => 1450
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rántott sertésköröm, waldorf saláta(1,3,5,7,8,9,10,11)',
                    'price' => 2570
                ],
                [
                    'name' => 'Hagymás csirkemáj, puliszka(7)',
                    'price' => 2480
                ],
                [
                    'name' => 'Grill camembert, jázmin rizs, áfonya(7,8,10)',
                    'price' => 2410
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Banánkenyér, sós karamell(1,3,7)',
                    'price' => 1350
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5380,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Tojásleves(1,3,4,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Csevap, konfitált bab, ajvár',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Citromos piskóta, mascarpone(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
