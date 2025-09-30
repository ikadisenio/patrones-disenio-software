/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package ups.edu.ec.modelo;

import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author andres.chiliquinga
 */
public class Carpeta implements ComponenteArchivo {
    private String nombre;
    private List<ComponenteArchivo> elementos = new ArrayList<>();

    public Carpeta(String nombre) {
        this.nombre = nombre;
    }

    @Override
    public String getNombre() {
        return nombre;
    }

    @Override
    public int getTamano() {
        int total = 0;
        for (ComponenteArchivo e : elementos) {
            total += e.getTamano();
        }
        return total;
    }

    @Override
    public void agregarArchivo(ComponenteArchivo componente) {
        elementos.add(componente);
    }

    @Override
    public void eliminarArchivo(ComponenteArchivo componente) {
        elementos.remove(componente);
    }

    @Override
    public List<ComponenteArchivo> getArchivos() {
        return elementos;
    }


}
