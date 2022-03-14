<?php
  class Singleton
  {
    //propiedad privada y unica de la clase, su instancia
    private static $theInstance = null;

    //obtener la instancia singleton
    public static function getInstance()
    {
      //si la instancia es null, crear una nueva instancia propia
      if (self::$theInstance === null) {
        self::$theInstance = new Self();
      }
      //si la instancia no es null, retornar la existente
      return self::$theInstance;
    }

    //constructor privado
    private function __construct()
    {
      $this->property = "hello there :)";
    }
  }
?>