<?php
class ActivoFijoBuilder {
    private string $codigo;
    private string $nombre;
    private float $precio;

    private ?string $marca = null;
    private ?string $modelo = null;
    private ?string $color = null;
    private ?string $ubicacion = null;
    private ?string $responsable = null;

    public function __construct(string $codigo, string $nombre, float $precio) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function setMarca(string $marca): self { $this->marca = $marca; return $this; }
    public function setModelo(string $modelo): self { $this->modelo = $modelo; return $this; }
    public function setColor(string $color): self { $this->color = $color; return $this; }
    public function setUbicacion(string $ubicacion): self { $this->ubicacion = $ubicacion; return $this; }
    public function setResponsable(string $responsable): self { $this->responsable = $responsable; return $this; }

    public function build(): ActivoFijo {
        return new ActivoFijo($this);
    }

    // Getters para que ActivoFijo acceda
    public function getCodigo(): string { return $this->codigo; }
    public function getNombre(): string { return $this->nombre; }
    public function getPrecio(): float { return $this->precio; }
    public function getMarca(): ?string { return $this->marca; }
    public function getModelo(): ?string { return $this->modelo; }
    public function getColor(): ?string { return $this->color; }
    public function getUbicacion(): ?string { return $this->ubicacion; }
    public function getResponsable(): ?string { return $this->responsable; }
}
 ?>