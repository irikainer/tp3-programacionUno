<?php
class AlumnoLibre
{
    public $nombre;
    public $apellido;
    public $dni;
    public $notaFinal;

    public function __construct($nom, $ape, $dni, $notaF)
    {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->dni = $dni;
        $this->notaFinal = $notaF;
    }

    public function getNombreApellido()
    {
        return "Nombre y apellido: $this->nombre $this->apellido";
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function getNota()
    {
        return $this->notaFinal;
    }

    public function __toString()
    {
        return "El nombre del alumno es $this->nombre $this->apellido, su DNI es $this->dni y su nota final es $this->notaFinal";
    }
}
