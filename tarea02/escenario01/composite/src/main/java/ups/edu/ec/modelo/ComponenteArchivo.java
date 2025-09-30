/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package ups.edu.ec.modelo;

import java.util.List;

/**
 *
 * @author andres.chiliquinga
 */
public interface ComponenteArchivo {
    String getNombre();
    int getTamano();
    void agregarArchivo(ComponenteArchivo componente);
    void eliminarArchivo(ComponenteArchivo componente);
    List<ComponenteArchivo> getArchivos();
}
