<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model

{
    protected $fillable = ['nom','type_animaux','caracteristique'];
    
    /**
      * Fonction accesseur description d'un animal
      * @param $value
      * @return String la description
      */
   public function getDescriptionAttribute($value) {
       $description="dldldl";
       if($this->type_animaux=="Oiseau"){
            $description="je suis un(e) ".$this->nom." et mon plumage est ".$this->caracteristique;
    
        } else if ($this->type_animaux=="Reptile"){
           $description="je suis un(e) ".$this->nom." et mes écailles sont ".$this->caracteristique;
       }else if ($this->type_animaux=="Mammifère"){
           $description="je suis un(e) ".$this->nom." et ma fourrure est ".$this->caracteristique;
       }
           
        return $description;
    }

  /**
      * Fonction accesseur couleur d'un animal
      * @param $value la valeur de l'attribut color sur animal
      * @return String la couleur
      */
    
    public function getColorAttribute($value) {
        $color= "#fff";
            
       if($this->type_animaux=="Oiseau"){
            $color="#C9B5E9";
    
        } else if ($this->type_animaux=="Reptile"){
           $color="#BFE9C5";
           
       }else if ($this->type_animaux=="Mammifère"){
           $color="#B5C6E9";
           
       }
        return $color;
        
    }
      
    
   

}


