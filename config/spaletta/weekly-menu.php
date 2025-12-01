<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.12.03. - 2025.12.05.',
    'saturday-date' => '2025.12.06.',
    'hide' => false,
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
                    'name'  => 'Palóc leves(1,7,9)',
                    'price' => 1540
                ],
                [
                    'name'  => 'Fahéjas almaleves(7)',
                    'price' => 1420
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rakott burgonya, tejföl(3,7)',
                    'price' => 2560
                ],
                [
                    'name' => 'Párizsi csirkemell, rizibizi, savanyú cékla(1,3,7)',
                    'price' => 2540
                ],
                [
                    'name' => 'Túrós tészta, pörc(1,3,7)',
                    'price' => 2380
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Baszk sajttorta, birsalma(1,3,7)',
                    'price' => 1450
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5480,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Frankfurti leves(1,7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rántott sertéskaraj, petrezselymes burgonya, csemege uborka(1,3,10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Piskótatekercs, baracklekvár(1,3)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
