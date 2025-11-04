## Ejercicio 1: Factory Pattern  
**Crear personajes según el nivel del juego**

### Qué hice:
- Dos personajes: `Esqueleto` (nivel fácil) y `Zombi` (nivel difícil).  
- Cada uno con **ataque y velocidad diferentes**.  
- Usé una **clase `CharacterFactory`** que decide qué personaje crear según el nivel.  
- No uso `new Skeleton()` directamente → todo pasa por la fábrica.

### Resultado:
> Se ve claramente que el **mismo código** crea personajes distintos según el nivel.

---

## Ejercicio 2: Adapter Pattern  
**Compatibilidad de archivos entre Windows 7 y 10**

### Qué hice:
- Un archivo antiguo de Windows 7 (`Windows7File`).  
- Windows 10 no lo abre directamente.  
- Creé un **adaptador** (`FileAdapter`) que convierte el archivo viejo para que Windows 10 lo entienda.  
- Así, el código viejo sigue funcionando sin cambios.


### Resultado:
> El archivo de Windows 7 **se abre en Windows 10** gracias al adaptador.

---

## Ejercicio 3: Decorator Pattern  
**Añadir armas a personajes**

### Qué hice:
- Dos personajes: `Guerrero` y `Arquero`.  
- Pueden tener **armas** (Espada o Arco) que aumentan su poder.  
- Usé **decoradores** para "envolver" al personaje y añadir funcionalidad.  
- Puedo combinar: Guerrero → con Espada → con Escudo (si quisiera).


### Resultado:
> El poder de ataque **aumenta** al añadir armas, sin modificar la clase original.

---

## Ejercicio 4: Strategy Pattern  
**Salidas múltiples: consola, JSON, archivo TXT**

### Qué hice:
- Un mensaje que se puede mostrar de **3 formas distintas**.  
- Usé **estrategias** para cambiar el tipo de salida **sin tocar el código del mensaje**.  
- Al inicio limpio el archivo `output.txt` para evitar duplicados.  
- Muestro el contenido del TXT **en pantalla** para verificar que se guardó.


### Resultado:
> El mismo mensaje aparece en consola, JSON y archivo, **cambiando solo la estrategia**.

---

## Cómo ejecutar los ejercicios

1. Coloca todo en tu servidor local (XAMPP, Laragon, etc.).  
2. Abre en el navegador:
http://localhost/Patrones_Ejercicios/ejercicio1_factory/index.php
http://localhost/Patrones_Ejercicios/ejercicio2_adapter/index.php
http://localhost/Patrones_Ejercicios/ejercicio3_decorator/index.php
http://localhost/Patrones_Ejercicios/ejercicio4_strategy/index.php

   
