/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package ups.edu.ec.vista;
import ups.edu.ec.controlador.ArchivoController;
import ups.edu.ec.modelo.Carpeta;
import ups.edu.ec.modelo.ComponenteArchivo;

import java.util.List;

/**
 *
 * @author andres.chiliquinga
 */
public class ConsolaVista {
    private ArchivoController controller;

    public ConsolaVista(ArchivoController controller) {
        this.controller = controller;
    }

    public void mostrarSistema() {
        Carpeta raiz = controller.getCarpetaRaiz();
        System.out.println("------SISTEMA DE ARCHIVOS (Composite)------");
        ejecutarFlujo(raiz, 0);
    }

    private void ejecutarFlujo(ComponenteArchivo componente, int nivel) {
        String indentacion = "  ".repeat(nivel);
        if (!componente.getArchivos().isEmpty() || componente instanceof Carpeta) {
            System.out.println(indentacion + " [" + componente.getNombre() + "] | TAMAÑO: " + componente.getTamano() + " KB");
            List<ComponenteArchivo> hijos = componente.getArchivos();
            for (ComponenteArchivo hijo : hijos) {
                ejecutarFlujo(hijo, nivel + 1);
            }
        } else {
            System.out.println(indentacion + componente.getNombre() + " (" + componente.getTamano() + " KB)");
        }
    }
}
