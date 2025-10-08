/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package modelo;

/**
 *
 * @author Andres
 */
import java.util.Stack;

public class Historial {
    private final Stack<TextoMemento> historial = new Stack<>();

    public void guardar(TextoMemento memento) {
        historial.push(memento);
    }

    public TextoMemento obtenerUltimo() {
        return historial.isEmpty() ? null : historial.pop();
    }
}
