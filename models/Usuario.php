<?php 
    class Usuario{
        public $nombres;
        public $apellidos;
        public $ocupacion;
        public $discapacidad;
        public $rut;
        public $etnia;
        public $fechaNac;
        public $sexo;
        public $estadoCivil;
        public $correoElectronico;
        public $password;
        public $numeroContacto;
        public $familia;

        public function __construct($nombres, $apellidos, $ocupacion, $discapacidad, $rut, $etnia, $fechaNac, $sexo, $estadoCivil, $correoElectronico, $password, $numeroContacto, $familia){
            $this->nombres = $nombres;
            $this->apellidos = $apellidos;
            $this->ocupacion = $ocupacion;
            $this->discapacidad = $discapacidad;
            $this->rut = $rut;
            $this->etnia = $etnia;
            $this->fechaNac = $fechaNac;
            $this->sexo = $sexo;
            $this->estadoCivil = $estadoCivil;
            $this->correoElectronico = $correoElectronico;
            $this->password = $password;
            $this->numeroContacto = $numeroContacto;
            $this->familia = $familia;
        }

        public function getNombres(){
            return $this->nombres;
        }

        public function getApellidos(){
            return $this->apellidos;
        }

        public function getOcupacion(){
            return $this->ocupacion;
        }

        public function getDiscapacidad(){
            return $this->discapacidad;
        }

        public function getRut(){
            return $this->rut;
        }

        public function getEtnia(){
            return $this->etnia;
        }

        public function getFechNac(){
            return $this->fechaNac;
        }
        
        public function getSexo(){
            return $this->sexo;
        }

        public function getEstadoCivil(){
            return $this->estadoCivil;
        }

        public function getCorreoElectronico(){
            return $this->correoElectronico;
        }

        public function getPassword(){
            return $this->password;
        }

        public function getNumeroContacto(){
            return $this->numeroContacto;
        }

        public function getFamilia(){
            return $this->familia;
        }

        // setters 

        public function setNombres($nombres){
            $this->nombres = $nombres;
        }

        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }

        public function setOcupacion($ocupacion){
            $this->ocupacion = $ocupacion;
        }

        public function setDiscapacidad($discapacidad){
            $this->discapacidad = $discapacidad;
        }
        
        public function setRut($rut){
            $this->rut = $rut;
        }

        public function setEtnia($etnia){
            $this->etnia = $etnia;
        }

        public function setFechNac($fechaNac){
            $this->fechaNac = $fechaNac;
        }

        public function setSexo($sexo){
            $this->sexo = $sexo;
        }

        public function setEstadoCivil($estadoCivil){
            $this->estadoCivil = $estadoCivil;
        }

        public function setCorreoElectronico($correoElectronico){
            $this->correoElectronico = $correoElectronico;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function setNumeroContacto($numeroContacto){
            $this->numeroContacto = $numeroContacto;
        }

        public function setFamilia($familia){
            $this->familia = $familia;
        }
    }
?>