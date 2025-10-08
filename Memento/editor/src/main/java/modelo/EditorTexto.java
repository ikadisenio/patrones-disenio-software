/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package modelo;

/**
 *
 * @author Andres
 */
public class EditorTexto {
    private String contenido = "";

    public void escribir(String texto) {
        contenido += texto;
    }

    public void borrar() {
        contenido = "";
    }

    public String getContenido() {
        return contenido;
    }

    public TextoMemento crearMemento() {
        return new TextoMemento(contenido);
    }

    public void restaurar(TextoMemento memento) {
        contenido = memento.getEstado();
    }
}
