<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class PlaylistParams extends Component
{   
    //playlist gen variables
    #[Validate('required|min:5',onUpdate:false,message:'Please provide a title for your playlist')]
    public $title ='';

    public $ProgrammaticTime;

    public $EntertainmentTime;

    public $VenueSpecificTime;

    public $result = '';


    //building the table
    #[Validate('required',onUpdate:false,message:'You need at least one genre')]
    public $genres = [];

    public $select ='';
    
    
    public function build(){
        $validate = $this->validate();
        $this->result = $validate;
    }

    //function to add genre type to the above array from the dropdown menu
    public function addGenre()
    {
        if(in_array($this->select,$this->genres) or $this->select == ''){
            return;
        }

        $this->genres[] = $this->select;

        $this->select ='';
    }

    //function called when the delete key is pressed in the genre table
    //does not currently adjust time variable.
    public function removeGenre($option){
        $key = array_search($option,$this->genres);
        array_splice($this->genres,$key,1);
    }

    //gives venue specific a space between text.
    //simple and could be improved upon but fast.
    public function displayGenre($label){
        if($label == 'VenueSpecific'){return 'Venue Specific';}

        return $label;
    }
    
    //debug function
    public function timeHelper($label){
        switch($label){
            default:
            case 'Programmatic':
                return $this->ProgrammaticTime;
            case 'Entertainment':
                return $this->EntertainmentTime;
            case 'VenueSpecific':
                return $this->VenueSpecificTime;
            
        }
    }


      //render function
      public function render()
      {
          return view('livewire.playlist-params');
      }
  
}
