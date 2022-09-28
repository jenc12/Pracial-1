<?php 
    class autos {
        private $id;
        private $marca;
        private $model;
        private $price;
        private $leasedays;
        private $totalprice;
        private $icon;
        private $ver;

        public function __construct($id, $marca, $model, $price, $leasedays, $totalprice, $icon, $ver) {
            $this->id = $id;
            $this->marca = $marca;
            $this->model = $model;
            $this->price = $price;
            $this->leasedays = $leasedays;
            $this->totalprice = $totalprice;
            $this->icon = $icon;
            $this->ver = $ver;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function setModel($model){
            $this->model = $model;
        }

        public function getModel(){
            return $this->model;
        }

        public function setPrice($price){
            $this->price = $price;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setLeaseDays($leasedays){
            $this->leasedays = $leasedays;
        }

        public function getLeaseDays(){
            return $this->leasedays;
        }

        public function setTotalPrice($totalprice){
            $this->totalprice = $totalprice;
        }

        public function getTotalPrice(){
            return $this->totalprice;
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

        public function multi(){
            $totalprice = $this->price * $this->leasedays;
            return $totalprice;
        }
    }
?>