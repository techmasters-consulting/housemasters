<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\Category;
use App\Models\Location;
use App\Models\Status;
use App\Models\Idea;
use App\Models\Vote;
use App\Models\File;

use Livewire\WithFileUploads;
use Illuminate\Http\Response;
use Livewire\Component;

class CreateIdea extends Component
{
    use WithAuthRedirects, WithFileUploads;
  
   
    public $title;
    public $category = 1;
    public $description;
    public $location = 1;
    public $price;
    public $status = 1;
   
    #[Validate('image|max:1024')] // 1MB Max
    public $photo;

    protected $rules = [
        'title' => 'required|min:4',
        'category' => 'required|integer|exists:categories,id',
       // 'status' => 'required|integer|exists:statuses,id',
        'location' => 'required|integer|exists:locations,id',
        'price' => 'required|integer',
        'description' => 'required|min:4',
    ];

    public function createIdea()
    {
        if (auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->validate();
        //$this->photo->store('public/photo');
        $stored_file =  $this->photo->store('public/photo');
    


        $idea = Idea::create([
            'user_id' => auth()->id(),
            'category_id' => $this->category,
            'status_id' =>$this->status,
            'location_id' =>$this->location,
            'price' =>$this->price,
            'title' => $this->title,
            'description' => $this->description,
            'no_of_bathrooms' => '1',
            'no_of_bedrooms' => '1',
            'photo' => pathinfo($stored_file)['basename'],
            'description' => $this->description,
        ]);

        
        

 
             $this->reset('photo');
        // $this->idd++;
        $idea->vote(auth()->user());

        session()->flash('success_message', 'Property was added successfully!');

        $this->reset();

        return redirect()->route('idea.index');
    }
   
       

       
  
   

    public function render()
    {
        return view('livewire.create-idea', [
            'categories' => Category::all(),
            'locations' => Location::all(),
            'statuses' => Status::all(),
        ]);
    }
}
