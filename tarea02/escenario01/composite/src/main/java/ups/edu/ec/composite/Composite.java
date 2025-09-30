/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package ups.edu.ec.composite;

import ups.edu.ec.controlador.ArchivoController;
import ups.edu.ec.modelo.Carpeta;
import ups.edu.ec.modelo.Archivo;
import ups.edu.ec.vista.ConsolaVista;

/**
 *
 * @author andres.chiliquinga
 */
public class Composite {

    public static void main(String[] args) {

        ArchivoController controller = new ArchivoController();
        System.out.println("------SE AGREGAN ARCHIVOS A LA CARPETA RAIZ------");
        controller.agregarArchivo("documento.pdf", 200);
        controller.agregarArchivo("informe.docx", 50);
        controller.agregarArchivo("informe_final.docx", 50);

        System.out.println("------SE CREA SUB-CARPETA------ ");
        Carpeta subcarpeta = new Carpeta("Subcarpeta");
        System.out.println("------SE AGREGAN ARCHIVOS A SUB-CARPETA------");
        subcarpeta.agregarArchivo(new Archivo("datos.xlsx", 120));
        subcarpeta.agregarArchivo(new Archivo("reporte_datos.docx", 100));

        controller.agregarCarpeta(subcarpeta);

        ConsolaVista vista = new ConsolaVista(controller);
        vista.mostrarSistema();

        System.out.println("Tamaño total del sistema de archivos: " + controller.obtenerTamanoCarpeta() + " KB");
    }
}
