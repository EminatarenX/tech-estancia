<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Rutas de acceso publico
```json
	"inicio": "/",
	"productos": "/productos",
	"servicios": "/servicios",
	"contacto": "/contacto",
```

### Rutas privadas
```json
{
	"Iniciar_sesion": "/login",
	"Dashboard": "/dashboard",
	"Lista_de_productos": "/dashboard/products",
	"Crear_Producto": "/dashboard/products-create",
	"Ver_producto": "/dashboard/products/{id_producto}",
	"Lista_de_servicios": "/dashboard/services",
	"Crear_servicios" : "/dashboard/services-create",
	"Ver_servicio" : "/dashboard/services/{id_service}",
	"Ver_equipo_de_trabajo": "/dashboard/team",
	"Agregar_nuevo_miembro": "/dashboard/team-create",
	"Ver_miembro": "/dashboard/team/{id_team_mate}",
}
```

### Levantar la aplicacion con docker compose
```
./vendor/bin/sail up
```
o bien se puede ejecutar un comando mas corto si configuramos un alias de ese comando 
```
sail up
```
si no configuraste un alias usaras el comando completo ./vendor/bin/sail <command>

### Comandos de sail
#### ejecutar entorno de desarrollo web con vite
1. sail npm [command]

#### Acceder a la base de datos
2. sail mysql -u

#### Sail + artisan commands
3. sail artisan
	1. sail artisan tinker
	2. sail artisan migrate
	3. sail artisan make:model Mymodel
	4. sail artisan make:controller MyController
	5. sail artisan make:migration create_posts_table
