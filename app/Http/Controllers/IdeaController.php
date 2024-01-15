<?php

namespace App\Http\Controllers;

use App\Exports\IdeaExport;
use App\Models\Idea;
use App\Models\Vote;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class IdeaController extends Controller
{

    use WithFileUploads;
 
    #[Validate('image|max:1024')] // 1MB Max
    public $photos;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('idea.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function show(Idea $idea)
    {
        return view('idea.show', [
            'idea' => $idea,
            'votesCount' => $idea->votes()->count(),
            'backUrl' => url()->previous() !== url()->full() && url()->previous() !== route('login')
                ? url()->previous()
                : route('idea.index'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function edit(Idea $idea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Idea $idea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idea $idea)
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function manage()
//    {
//        return view('idea.manage');
//    }
    public function manage()
    {
        $ideas = Idea::all();

        return view('idea.manage', [
            'idea' => $ideas
        ]);
    }
    public function idea_export(){
        return Excel::download(new IdeaExport, 'ideas.xlsx');
    }

   
 
    public function save()
    {
        $this->photos->store('photos');
    }

}
