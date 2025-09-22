# Patrones de Disenio de Software
Patrones creacionales
Ejercicios de patrones de diseño de software 01 Factory y  02 Building, donde se da solucion a los siguientes escenarios respectivamente

La solucion esta desarrollada en PHP bajo el patron MVC, y la informacion se almacena en una base de datos MariaDB.
El modelo de BDD esta dentro de cada carpeta 

1.	Escenario 01:
Supongamos que en una empresa se necesita registrar información de vehículos; los mismos que pueden ser de 3 tipos: Autos, Camionetas y Camiones. Debe existir una sola clase Vehículo que permita obtener el costo de la matricula (Definir los atributos necesarios), pero cada una de las subclases de Vehículo pueden especificar el cálculo del costo de la matrícula es diferente en cada uno de los Vehículos según el tipo. No se puede saber de antemano la clase que se instanciará, ya que dependerá de un parámetro ingresado por el cliente.

3.	Escenario 02:
Necesitamos una clase compleja que maneje todos los atributos relacionados con un activo fijo (Computador, Mesa, Auto, Silla, etc.) Existen tres atributos obligatorios: código, nombres y precio. Pero pueden existir al menos 5 atributos opcionales dentro de un activo fijo. Se necesita construir objetos a partir de una misma interfaz.
