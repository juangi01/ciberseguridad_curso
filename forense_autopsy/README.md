# Análisis Forense Digital con Autopsy

Ejercicio de informática forense sobre una imagen de disco tras el borrado intencionado de datos de navegación, con el objetivo de determinar qué información es recuperable y detectar posibles indicios de manipulación.

## Metodología

1. Borrado del historial y datos de navegación en el navegador (Brave/Chromium)
2. Escaneo de la imagen de disco con **Autopsy**
3. Análisis del historial web recuperado y comparación con los metadatos del sistema de archivos
4. Análisis de las cookies web almacenadas

## Hallazgos

- El historial web mostraba registros hasta una fecha/hora determinada, mientras que los **metadatos de modificación de la base de datos del historial** reflejaban una hora posterior — evidencia de que el archivo fue manipulado después del último registro visible.
- Pese al borrado del historial, **las cookies web sí fueron recuperables** en su mayoría, incluyendo entradas anteriores al borrado — lo que demuestra que distintos artefactos del navegador tienen distinta resistencia a la eliminación de datos.

## Conclusión

El ejercicio demuestra cómo el cruce de fuentes de evidencia (registros de aplicación vs. metadatos del sistema de archivos) permite detectar inconsistencias que apuntan a manipulación de datos, incluso cuando el usuario ha intentado borrar su rastro.

## Herramientas

`Autopsy`
