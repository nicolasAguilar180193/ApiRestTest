# Laravel API para Gestión de Clientes y Facturas

Este proyecto Laravel proporciona una API simple para la gestión de clientes y facturas. Implementa las operaciones básicas de CRUD (Crear, Leer, Actualizar, Eliminar) para ambas entidades. 

## Requisitos

Asegúrate de tener instalado lo siguiente en tu entorno de desarrollo:

- PHP ^8.1
- Composer
- MySQL o cualquier otro sistema de gestión de bases de datos compatible

## Instalación

1. Clona el repositorio:

```bash
git clone https://github.com/nicolasAguilar180193/ApiRestTest.git
cd ApiRestTest
```
2. Instalar dependencias:

```bash
composer install
```

3. Apartir del archivo .env.example crear un archivo .env y configurar lo necesario, como por ejemplo la coneccion a la base de datos.

```bash
cp .env.example .env
```

4. Ejecuta las migraciones y los seeders para inicializar la base de datos:

```bash
php artisan migrate --seed
```

5. Levantar el servidor de artisan:

```bash
php artisan serve
```

## Uso

### Endpoints

* Clientes(Customers):
    * GET api/v1/customers: Obtener todos los clientes.
    * GET api/v1/customers?includeInvoices=true: Obtener todos los clientes con sus facturas.
    * GET api/v1/customers?type[eq]=B&postalCode[gt]=90000: Obtener todos los clientes con algunos filtros.
    * POST api/v1/customers: Crear un cliente.
    * GET api/v1/customers/{id}: Obtener un cliente.
    * PATCH api/v1/customers/{id}: Actualizar algun atributo de un cliente.
    * PUT api/v1/customers/{id}: Actualizar todos los atributos de un cliente.

* Facturas(Invoices):
    * api/v1/invoices: Obtener todos las facturas.
    * api/v1/invoices/bulk: Inseta facturas masivamente a travez de un array de objetos json con atributos correspondientes.

* Usuario(User);
    * POST app/v1/user/register: Registra un nuevo usuario.

## Contribuciones

¡Contribuciones son bienvenidas! Si encuentras errores o mejoras posibles, por favor abre un issue o envía una pull request.
