<?php
    class Familia{
        public $idFamilia;
        public $nombre;

        public function __construct($idFamilia, $nombre){
            $this->idFamilia = $idFamilia;
            $this->nombre = $nombre;
        }
        public function getIdFamilia(){
            return $this->idFamilia;
        }

        public function setIdFamilia($idFamilia){
            $this->idFamilia = $idFamilia;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
    }

?>