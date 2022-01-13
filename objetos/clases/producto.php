<?php
    class producto{
        private $id;
        private $nombre;
        private $descripcion;
        private $precio;

        public function __construct($id, $nombre, $descripcion, $precio)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->precio = $precio;
        }

        //Getters
        public function get_id(){
            return $this->id;
        }
        public function get_nombre(){
            return $this->nombre;
        }
        public function get_descripcion(){
            return $this->descripcion;
        }
        public function get_precio(){
            return $this->precio;
        }

        //Setters
        public function set_id($id){
            $this->nombre = $id;
        }

        public function set_nombre($nombre){
            $this->nombre = $nombre;
        }
        public function set_descripcion($descripcion){
            $this->nombre = $descripcion;
        }
        public function set_precio($precio){
            $this->nombre = $precio;
        }
    }