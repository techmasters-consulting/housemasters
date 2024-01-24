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
    public $no_of_bathrooms = 1;
   
    #[Validate('image|max:1024')] // 1MB Max
    public $photo = "https://images.unsplash.com/photo-1595222016771-1843541fa718?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1053&q=80";

    protected $rules = [
        'title' => 'required|min:4',
        'category' => 'required|integer|exists:categories,id',
       'status' => 'required|integer|exists:statuses,id',
        'location' => 'required|integer|exists:locations,id',
        'price' => 'required|integer',
        'no_of_bathrooms' => 'required|integer',
        'description' => 'required|min:4',
    ];

    public function createIdea()
    {
        if (auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->validate();
        //$this->photo->store('public/photo');
      //  $stored_file =  $this->photo->store('photo');
    


        $idea = Idea::create([
            'user_id' => auth()->id(),
            'category_id' => $this->category,
            'status_id' =>$this->status,
            'location_id' =>$this->location,
            'price' =>$this->price,
            'title' => $this->title,
            'description' => $this->description,
            'no_of_bathrooms' => $this->no_of_bathrooms,
            'no_of_bedrooms' => substr($this->category, 0, 1),
            'photo' => $this->photo,
            'description' => $this->description,
        ]);
        // $this->reset('photo');
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
