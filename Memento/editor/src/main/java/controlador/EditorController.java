/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package controlador;

import modelo.EditorTexto;
import modelo.Historial;
import modelo.TextoMemento;
import vista.EditorView;

/**
 *
 * @author Andres
 */
public class EditorController {
    private final EditorTexto editor;
    private final Historial historial;
    private final EditorView vista;

    public EditorController(EditorTexto editor, Historial historial, EditorView vista) {
        this.editor = editor;
        this.historial = historial;
        this.vista = vista;
    }

    public void escribirTexto(String texto) {
        editor.escribir(texto);
        historial.guardar(editor.crearMemento());
        vista.mostrarContenido(editor.getContenido());
    }

    public void deshacer() {
        TextoMemento memento = historial.obtenerUltimo();
        if (memento != null) {
            editor.restaurar(memento);
            vista.mostrarContenido(editor.getContenido());
        } else {
            vista.mostrarMensaje("No hay historial para deshacer.");
        }
    }
}
