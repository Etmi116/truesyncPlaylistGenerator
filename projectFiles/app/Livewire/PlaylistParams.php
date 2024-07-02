<?php

namespace App\Livewire;

use Livewire\Component;

class PlaylistParams extends Component
{   
    //playlist gen variables
    public $title;

    public $ProgrammaticTime;

    public $EntertainmentTime;

    public $VenueSpecificTime;


    //building the table
    public $genres = [];

    public $select ='';
    
 
    public function add()
    {
        if(in_array($this->select,$this->genres) or $this->select == ''){
            return;
        }
        $this->genres[] = $this->select;

        $this->select ='';
    }

    public function remove($option){
        $key = array_search($option,$this->genres);
        array_splice($this->genres,$key,1);
    }
 
    public function render()
    {
        return view('livewire.playlist-params');
    }
}
