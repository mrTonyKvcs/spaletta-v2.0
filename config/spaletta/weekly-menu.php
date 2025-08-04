<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.08.06. - 2025.08.08.',
    'saturday-date' => '2025.08.09.',
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
                    'name'  => 'Ázsiai húsleves, kacsás wonton, roppanós zöldségek(1,2,4,6)',
                    'price' => 1590
                ],
                [
                    'name'  => 'Gazpacho, salsa(1)',
                    'price' => 1560
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Lassan sült sertéstarja, hentes ragu, burgonyapüré(1,6,7,10)',
                    'price' => 2590
                ],
                [
                    'name' => 'Párizsi csirkemell, rizibizi, barack(1,3,7)',
                    'price' => 2570
                ],
                [
                    'name' => 'Hazi tagliatelle, lazac, cukkini, citrom, bazsalikom(1,3,4,7)',
                    'price' => 2490
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Túrós-barackos tejespite(1,3,7)',
                    'price' => 1290
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5490,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Grízgaluska leves(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rántott sertésszelet, petrezselymes burgonya, tejfölös uborkasaláta(1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Meggyes cobbler, vaníliás tejszín(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
