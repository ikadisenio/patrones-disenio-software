/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package ika.editor;

import controlador.EditorController;
import modelo.EditorTexto;
import modelo.Historial;
import vista.EditorView;

/**
 *
 * @author Andres
 */
public class Editor {

    public static void main(String[] args) {
        EditorTexto editor = new EditorTexto();
        Historial historial = new Historial();
        EditorView vista = new EditorView();
        EditorController controlador = new EditorController(editor, historial, vista);

        controlador.escribirTexto("Hola ");
        controlador.escribirTexto("mundo!");
        controlador.deshacer();
        controlador.deshacer();
    
    }
}
