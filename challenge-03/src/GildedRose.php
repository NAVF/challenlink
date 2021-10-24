<?php

namespace App;

class GildedRose
{
    public $name;

    public $quality;

    public $sellIn;

    public function __construct($name, $quality, $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public static function of($name, $quality, $sellIn) {
        return new static($name, $quality, $sellIn);
    }

    public function tick()
    {
        //=======PARA LA RESOLUCIÓN DEL TERCER CHALLENGE HE CONSIDERADO DOS BLOQUES DE CÓDIGO, EN EL PRIMERO (BLOQUE SIN COMENTAR) HE REFACTORIZADO EL CÓDIGO INICIAL Y ADEMAS HE CONSIDERADO EL CALCULO PARA LOS OBJETOS CONJURADOS, Y EN EL SEGUNDO (BLOQUE COMENTADO) HE AGREGADO EL CALCULO PARA LOS OBJETOS CONJURADOS SOBRE EL CÓDIGO INICIAL================================================================================================//


        
        //========EN EL CODIGO SIGUIENTE SE HA REFACTORIZADO EL CÓDIGO INICIAL Y ADEMÁS SE HA AGREGADO EL CALCULO PARA LOS OBJETOS CONJURADOS=======
        $maxQuality = 50;
        $minQuality = 0;
        if ($this->name == "Aged Brie") {
            $this->quality = ($this->sellIn <= 0)? ($this->quality + 2) : ($this->quality + 1);
        
        }elseif ($this->name == "Backstage passes to a TAFKAL80ETC concert") {
            if ($this->sellIn <= 0){
                $this->quality = 0;
            }elseif ($this->sellIn <= 5) {
                $this->quality = $this->quality + 3;
            }elseif($this->sellIn <= 10) {
                $this->quality = $this->quality + 2;
            }else{
                $this->quality = $this->quality + 1;
            }
        
        }elseif ($this->name == "Conjured") {
            $this->quality = ($this->sellIn <= 0)? ($this->quality - 4) : ($this->quality - 2);
        
        }else{
            if ($this->name != 'Sulfuras, Hand of Ragnaros') {
                $this->quality = ($this->sellIn <= 0)? ($this->quality - 2) : ($this->quality - 1);    
            }
        }


        if ($this->name != 'Sulfuras, Hand of Ragnaros') {
            $this->sellIn = $this->sellIn - 1;
            if ($this->quality > $maxQuality) {$this->quality = $maxQuality;}
            if ($this->quality < $minQuality) {$this->quality = $minQuality;}
        }
        //==========================================================================================================================================




        //========EN EL CÓDIGO SIGUIENTE (TODO LO COMENTADO) SE HA AGREGADO EL CALCULO PARA LOS OBJETOS CONJURADOS===================================
        /*if ($this->name != 'Aged Brie' and $this->name != 'Backstage passes to a TAFKAL80ETC concert') {
            if ($this->quality > 0) {
                if ($this->name != 'Sulfuras, Hand of Ragnaros') {
                    $this->quality = $this->quality - 1;
                }
                //----------------------------------AGREGANDO EN CASO QUE SEA CONJURADOS----------------------------
                if($this->name == 'Conjured'){
                    if ($this->quality > 0) {
                        $this->quality = $this->quality - 1;
                    }
                }
                //------------------------------------------------------------------------------------------------
            }
        } else {
            if ($this->quality < 50) {
                $this->quality = $this->quality + 1;

                if ($this->name == 'Backstage passes to a TAFKAL80ETC concert') {
                    if ($this->sellIn < 11) {
                        if ($this->quality < 50) {
                            $this->quality = $this->quality + 1;
                        }
                    }
                    if ($this->sellIn < 6) {
                        if ($this->quality < 50) {
                            $this->quality = $this->quality + 1;
                        }
                    }
                }
            }
        }

        if ($this->name != 'Sulfuras, Hand of Ragnaros') {
            $this->sellIn = $this->sellIn - 1;
        }

        if ($this->sellIn < 0) {
            if ($this->name != 'Aged Brie') {
                if ($this->name != 'Backstage passes to a TAFKAL80ETC concert') {
                    if ($this->quality > 0) {
                        if ($this->name != 'Sulfuras, Hand of Ragnaros') {
                            $this->quality = $this->quality - 1;
                        }
                        //-------------------------AGREGANDO EN CASO QUE SEA CONJURADOS--------------------------------------
                        if($this->name == 'Conjured'){
                            if ($this->quality > 0) {
                                $this->quality = $this->quality - 1;
                            }
                        }
                        //-----------------------------------------------------------------------------------------------
                    }
                } else {
                    $this->quality = $this->quality - $this->quality;
                }
            } else {
                if ($this->quality < 50) {
                    $this->quality = $this->quality + 1;
                }
            }
        }*/
        //==============================================================================================================================
    }
}
