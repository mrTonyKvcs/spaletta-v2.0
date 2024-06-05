<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.06.05. - 2024.06.07.',
    'saturday-date' => '2024.06.08.',
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
                    'name'  => 'Sárgabarack, levendula (7)',
                    'price' => 1300
                ],
                [
                    'name'  => 'Tom kha gai (4)',
                    'price' => 1500
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rántott sertés tarja, rizibizi, savanyított lilahagyma (1,3,7)',
                    'price' => 2400
                ],
                [
                    'name' => 'Indiai vajas csirke, basmati rizs, naan (7,8)',
                    'price' => 2400
                ],
                [
                    'name' => 'Tojásos nokedli, ecetes saláta (1,3,7)',
                    'price' => 2100
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Cseresznyés pite, tejszín (1,3,7,8)',
                    'price' => 1100
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
                        'name'  => 'Ázsiai húsleves, roppanós zöldségek, soba tészta (1,4,6)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Kacsazúza pörkölt, galuska, csalamádé (1,3,10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Karamellizált leveles tészta, meggy, mascarpone (1,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
