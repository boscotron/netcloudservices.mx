<?php

$menu =  [
    "administrador"=>[
        "nombre"=>"Administrador",
        "url"=>"#",
        "class"=>"otra_clase",
        "permisos"=>"administrador",
        "submenu"=>[
            [
                "nombre"=>"Dashboard",
                "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador",       
                "class"=>"",
                "permisos"=>"administrador"
            ],[
                "nombre"=>"Usuarios",
                "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/usuarios",       
                "class"=>"",
                "permisos"=>"administrador"
            ],[
                "nombre"=>"DIVIDER"
            ],[
                "nombre"=>"Importar",
                "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/importar",       
                "class"=>"",
                "permisos"=>"administrador"
            ]
        ]
    ],
    "clientes"=>[
        "nombre"=>"Clientes",
        "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/clientes",
        "submenu"=>[
            [
                "nombre"=>'<i class="fa fa-users"></i> Lista de clientes',
                "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/clientes/",
                "permisos"=>"clientes",
            ],[
                "nombre"=>"DIVIDER"
            ]
        ]
    ],
    "ninos"=>[
        "nombre"=>"Niños y niñas",
        "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/ninos",
        "class"=>"",
    ],
    "inventario"=>[
        "nombre"=>"Productos",
        "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/productos",       
        "class"=>"",
    ]
];


$modulos =  [
    "clientes"=>[
        "nombre"=>"Clientes",
        "url_marco"=>"jmy/detalle_cliente.php",
        "controlador"=>"app/controlador/administrador_jmy/clientes.php",
        "controlador_ws"=>"app/controlador/administrador_jmy/clientesws.php",
        "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/clientes"
    ],
    "inventario"=>[
        "nombre"=>"Productos",
        "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/productos",       
        "class"=>"",
    ]
];