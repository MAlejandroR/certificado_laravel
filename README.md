## Creando un CRUD para profesores

### Creo en ecosistema

```bash
php artisan make:model Profesor --all
```

Esto crea los siguientes elementos:
* migracion (para creer las tablas)
* factoria (Crear valores para una fila de la tabla)
* seeder (invocar a la factoria de un model e insertar los valores en la tabla)
* controlador (los métodos que voy a ejecutar ante solicitudes del cliente) 
* modelo (clase para ineteractuar con una tabla de la bd y hacer acciones típicas como insertar, borrar, consultar, actualizar)
* request (autoriza, valida los datos del formulario)
* policy (ni idea, suena a políticas que definirás acceso)
* rutas (tengo que crearlas y dirán que recursos ofrece mi aplicación)

## Ajusto los valores por defecto

Cómo el modelo se llama Profesor y la tabla queiro que se llame prefores y no profesors, tengo que indicarlo:


### Creo las rutas




### Creo la tabla

###
Poblamos la tabla


# Instalar React en laravel

Primero instalamos 3 paquetes:
```bash
  npm install --save-dev @vitejs/plugin-react
    npm install react@latest react-dom@latest
```
Modificamos el fichero de configuración vite.config.js añadiendo en nuevo plugin que vamos a utilizar de react
````js
//.....
import react from "@vitejs/plugin-react"


export default defineConfig({
plugins: [
        react(),
        laravel({
            // .....
        }),
],
});
````

Importamos la librería de react en app.jsx

````js
import './bootstrap';
// import 'Code.jsx';

import React from "react";
import {createRoot} from "react-dom/client";

````

Ahora en la plantilla general especificamos a vite que cage app.jsx

````blade
    @viteReactRefresh
    @vite(["resources/css/app.css", "resources/js/app.jsx"])
````


