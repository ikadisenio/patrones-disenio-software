/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package ups.edu.ec.controlador;
import ups.edu.ec.modelo.Archivo;
import ups.edu.ec.modelo.Carpeta;

/**
 *
 * @author andres.chiliquinga
 */
public class ArchivoController {
    private Carpeta carpetaRaiz;

    public ArchivoController() {
        System.out.println("------SE CREA CARPETA RAIZ------");
        carpetaRaiz = new Carpeta("Raiz");
    }

    public Carpeta getCarpetaRaiz() {
        return carpetaRaiz;
    }

    public void agregarCarpeta(Carpeta carpeta) {
        carpetaRaiz.agregarArchivo(carpeta);
    }

    public void eliminarCarpeta(Carpeta carpeta) {
        carpetaRaiz.eliminarArchivo(carpeta);
    }

    public int obtenerTamanoCarpeta() {
        return carpetaRaiz.getTamano();
    }

    public void agregarArchivo(String nombre, int tamano) {
        carpetaRaiz.agregarArchivo(new Archivo(nombre, tamano));
    }


}
