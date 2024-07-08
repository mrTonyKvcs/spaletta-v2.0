<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.07.10. - 2024.07.12.',
    'saturday-date' => '2024.07.13.',
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
                    'name'  => 'Hideg szilvaleves, citrus sorbet',
                    'price' => 1190
                ],
                [
                    'name'  => 'Erdélyi húsgombóc leves (1,3,7,9)',
                    'price' => 1390
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rántott szelet, burgonya püré, barackbefőtt (1,3,7)',
                    'price' => 2390
                ],
                [
                    'name' => 'Ragacsos csirkecomb, jázmin rizs, pak choy (4,6,11)',
                    'price' => 2390
                ],
                [
                    'name' => 'Tempurás zöldségek a piacról, labneh, dukkah (1,5,7,11)',
                    'price' => 2190
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Mézes füge, mascarpone, narancs, mogyoró (7,8)',
                    'price' => 990
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 4990,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Currys karfiol leves',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Csirkepaprikás, galuska, tejfölös uborkasaláta (1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Sült sárgabarack, joghurt, karamellizált rizs (7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
