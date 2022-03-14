<?php

    class Manzano{
        private $manzanas = ["ManzanasRojas", "ManzanasAmarillas"];

        public function getManzanas(){
            return $this->manzanas;
        }
    }

    class ContadorDeManzanas extends Manzano{
        private $manzano;

        public function __contsruct(Manzano $manzano){
            $this->manzano = $manzano;
        }

        public function cuantas(){
            return count($this->manzano->getManzanas());
        }
    }