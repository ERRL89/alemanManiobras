<?php

function loadMenu($area)
{
    switch ($area) {
        case 1: // ADMINISTRACIÓN 
            return $menuOptions =
                [
                    [
                        'label' => 'Cotizaciones',
                        'favicon' => 'fa-solid fa-computer',
                        'idMenu' => 'menuDemos',
                        'submenus' => [
                            [
                                'label' => 'Nueva Cotización',
                                'favicon' => '',
                                'url' => 'newPriceBlank.php',
                            ],
                            [
                                'label' => 'Cotización de Servicios',
                                'favicon' => '',
                                'url' => 'newPriceServices.php',
                            ]
                        ]
                    ],
                    [
                        'label' => 'Facturas',
                        'favicon' => 'fa-solid fa-file-lines',
                        'idMenu' => 'contratos',
                        'submenus' => [
                            [
                                'label' => 'Registro',
                                'favicon' => '',
                                'url' => 'newBill.php',
                            ],
                            [
                                'label' => 'Pendientes',
                                'favicon' => '',
                                'url' => 'waitBill.php',
                            ],
                            [
                                'label' => 'Pagadas',
                                'favicon' => '',
                                'url' => 'okBill.php',
                            ],
                            [
                                'label' => 'Historial',
                                'favicon' => '',
                                'url' => 'allBill.php',
                            ]
                        ]
                    ],
                ];
            break;

        default:
            return $menuOptions =
                [
                    [
                        'label' => 'Puesto no asignado',
                    ],
                ];
            break;
    }
}
