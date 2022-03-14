<?php

class motoFactory {
    
    private static $motoModel = 2022;
    
    public static function motoCreate($motoMake) {
        
        return new Motocicleta($motoMake, self::$motoModel);
        
    }
    
}

$Moto1 = new Motocicleta('Thunderstar 250 XL 🏍', 2022);
$Moto2 = motoFactory::motoCreate('Suzuki Gixxer SF 250  🏍');

/*Patron de diseño Factory*/