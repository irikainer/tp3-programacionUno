<?php

class AlumnoPresencial
{

    public $nombre;
    public $apellido;
    public $dni;
    public $inasistencia;
    public $notasTp;
    public static $diasHabiles;
    public $notaFinal;


    public function __construct($nom, $ape, $dni, $asis, $notas)
    {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->dni = $dni;
        $this->inasistencia = $asis;
        $this->notasTp = $notas;
    }

    public static function setDiasHabiles($diasH)
    {
        self::$diasHabiles = $diasH;
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
     $promedio = 0;
     $porcentaje = self::$diasHabiles * 0.25;

      foreach($this->notasTp as $nota) {
          if ($nota >= 4) {
            $promedio = $promedio + $nota;
          } else {
              $this->notaFinal = 1;
              return $this->notaFinal;
          }
      }

      if ($this->inasistencia <= $porcentaje) {
       $this->notaFinal = $promedio / count($this->notasTp);
        return $this->notaFinal;
      } else {
        $this->notaFinal = 1;
        return $this->notaFinal;
      }
    
    }
    
    public function __toString()
    {
        return "El nombre del alumno es $this->nombre $this->apellido, su DNI es $this->dni y su nota final es $this->notaFinal."; 
    }

}
