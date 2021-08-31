<?php

class AlumnoPresencial
{

    public $nombre;
    public $apellido;
    public $dni;
    public $asistencia;
    public $notasf;
    public static $diasHabiles;


    public function __construct($nom, $ape, $dni, $asis, $notas)
    {
        $this->nombre = $nom;
        $this->apellidos = $ape;
        $this->dni = $dni;
        $this->asistencia = $asis;
        $this->notasf = $notas;
    }

    public static function setDiasHabiles($diasH)
    {
        self::$diasHabiles = $diasH;
    }
}
