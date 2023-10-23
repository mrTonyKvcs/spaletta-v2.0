<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2023.10.25. - 2023.10.28.',
    'saturday-date' => '2023.02.25.',
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
                    'name'  => 'Frankfurti leves',
                    'price' => 1700
                ],
                [
                    'name'  => 'Tárkonyos burgonyaleves',
                    'price' => 1400
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Ropogós császár, sárgaborsó főzelék',
                    'price' => 2600
                ],
                [
                    'name' => 'Joghurtos csirkenyárs, sült őszi zöldségek',
                    'price' => 2400
                ],
                [
                    'name' => 'Rikottás-parajos tagliatelle',
                    'price' => 2300
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Tejespite, sárgabarack',
                    'price' => 1200
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5000,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Húsleves vajas daragaluskával',
                        'price' => 1400
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Sertéskaraj orly módra, snidlinges burgonyapüré',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Csörögefánk áfonyamártással',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
