<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.01.31. - 2024.02.02.',
    'saturday-date' => '2024.02.03.',
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
                    'name'  => 'Körteleves, marinált körte, fűszeres kesudió',
                    'price' => 1400
                ],
                [
                    'name'  => 'Frankfurti leves',
                    'price' => 1600
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Tarhonyás hús, csalamádé',
                    'price' => 2600
                ],
                [
                    'name' => 'Rántott ponty, petrezselymes burgonya, tartár',
                    'price' => 2600
                ],
                [
                    'name' => 'Gnocchi sorrentina',
                    'price' => 2400
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Csörögefánk, baracklekvár',
                    'price' => 1300
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5400,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Tárkonyos csirkeraguleves',
                        'price' => 1400
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Cordon bleu, burgonyapüré, alma-körte kompót',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Reszelt meggyes',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
