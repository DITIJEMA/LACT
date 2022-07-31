<?php
    class Fecha{
        public $dia= date("d");
        public $mes = date("m");
        public $anio = date("Y");
        public $fecha = null;

        public function setDate(){
            $this->fecha = "$this->dia-$this->mes-$this->anio";
        } 

        public function getDate(){
            return $this->fecha;
        }
    }
?>