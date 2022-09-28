<?php 
    class monstruos {
        private $id;
        private $nombre;
        private $descripcion;
        private $localizacion;
        private $icon;
        private $ver;

        public function __construct($id, $nombre, $descripcion, $localizacion, $icon, $ver) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->localizacion = $localizacion;
            $this->icon = $icon;
            $this->ver = $ver;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setDescripcion($descripcion){
            $this->descripcion =$descripcion;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function setLocalizacion($localizacion){
            $this->localizacion = $localizacion;
        }

        public function getLocalizacion(){
            return $this->localizacion;
        }

        public function setIcon($icon){
            $this->icon = $icon;
        }

        public function getIcon(){
            return $this->icon;
        }

        public function setVer($ver){
            $this->ver = $ver;
        }

        public function getVer(){
            return $this->ver;
        }

    }
?>