<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.03.27. - 2024.03.29.',
    'saturday-date' => '2024.03.23.',
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
                    'name'  => 'Ázsiai húsleves, gombák, udon tészta (1,3,4,6,7)',
                    'price' => 1700
                ],
                [
                    'name'  => 'Tárkonyos csirkeraguleves (1,7,9,10)',
                    'price' => 1800
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Sertés cordon, burgonyapüré, ecetes szívsaláta (1,3,7)',
                    'price' => 2700
                ],
                [
                    'name' => 'Csirke tikka, jázminrizs, naan (1,7)',
                    'price' => 2500
                ],
                [
                    'name' => 'Rizottó, medvehagyma, parmezán (7)',
                    'price' => 2300
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Pavlova, friss gyümölcsök, tejszín, bazsalikom (3,7)',
                    'price' => 1400
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5300,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Húsleves, roppanós zöldségek, cérnametélt (1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Füstös csirke hortobágyi (1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Mézes körte, mascarpone, sós karamell, kesudió (7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
