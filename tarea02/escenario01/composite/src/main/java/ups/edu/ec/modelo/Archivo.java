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
public class Archivo implements ComponenteArchivo {
    private String nombre;
    private int tamano;

    public Archivo(String nombre, int tamano) {
        this.nombre = nombre;
        this.tamano = tamano;
    }

    @Override
    public String getNombre() {
        return nombre;
    }

    @Override
    public int getTamano() {
        return tamano;
    }

    @Override
    public void agregarArchivo(ComponenteArchivo componenteArchivo){}

    @Override
    public void eliminarArchivo(ComponenteArchivo componenteArchivo) {}

    @Override
    public List<ComponenteArchivo> getArchivos() {
        return List.of();
    }
}
