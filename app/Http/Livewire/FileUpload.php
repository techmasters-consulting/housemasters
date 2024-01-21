<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;


    public $slides=[];

    public function uploadMultipleFiles(){
        $this->validate([
            'slides.*' => 'image'
        ]);

        if( !empty( $this->slides ) ){
            foreach( $this->slides as $slide ){
                $slide->store('photos');
            }
        }
    }


    public function render()
    { 
        return view('livewire.file-upload');
    }
}    