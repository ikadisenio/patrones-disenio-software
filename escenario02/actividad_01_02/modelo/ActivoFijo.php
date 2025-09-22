<?php
require_once 'IActivoFijo.php';

class ActivoFijo implements IActivoFijo {
    private string $codigo;
    private string $nombre;
    private float $precio;

    private ?string $marca = null;
    private ?string $modelo = null;
    private ?string $color = null;
    private ?string $ubicacion = null;
    private ?string $responsable = null;

    public function __construct(ActivoFijoBuilder $builder) {
        $this->codigo      = $builder->getCodigo();
        $this->nombre      = $builder->getNombre();
        $this->precio      = $builder->getPrecio();
        $this->marca       = $builder->getMarca();
        $this->modelo      = $builder->getModelo();
        $this->color       = $builder->getColor();
        $this->ubicacion   = $builder->getUbicacion();
        $this->responsable = $builder->getResponsable();
    }

    public function getDatos(): array {
        return [
            'codigo'      => $this->codigo,
            'nombre'      => $this->nombre,
            'precio'      => $this->precio,
            'marca'       => $this->marca,
            'modelo'      => $this->modelo,
            'color'       => $this->color,
            'ubicacion'   => $this->ubicacion,
            'responsable' => $this->responsable
        ];
    }
}
 ?>