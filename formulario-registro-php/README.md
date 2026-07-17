# Formulario de Registro Web (PHP + MySQL)

Formulario de registro de usuarios con frontend en Bootstrap y backend en PHP conectado a una base de datos MySQL.

## Características

- Interfaz responsive basada en la plantilla oficial de ejemplos de Bootstrap
- Validación de entrada (formato de email, campos obligatorios)
- Inserción de datos mediante **sentencias preparadas** (`mysqli_prepare`), evitando inyección SQL
- Contraseñas almacenadas mediante **hash seguro** (`password_hash`, bcrypt), nunca en texto plano

## Estructura

```
SignIn.html      → Formulario (Bootstrap)
signin.css       → Estilos
php_seguro.php   → Backend: validación, sentencia preparada, hash de contraseña
```

## Tecnologías

`HTML` · `CSS` · `Bootstrap` · `PHP` · `MySQL`
