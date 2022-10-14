<?php

namespace App\Http\Controllers;
use App\Models\notes;

use Illuminate\Http\Request;

class notesController extends Controller
{
    //
    public function index()
{

    $notes=notes::all();
   return view('index',compact('notes'));
}

public function create()
{
    return view('create');
}

public function store(Request $request)
{
    // return $request;
    $noteModel=new notes;
    $noteModel->note_title=$request->note_title;
    $noteModel->note_date=$request->note_date;
    $noteModel->note_description=$request->note_description;
    $result= $noteModel->save();

    if($result==1)
    {
        return redirect("/")->with("msg","Note has been created successfully!");
    }
    else
    {
        return redirect()->back()->with("msg","Something went wrong!");
    } 

}



public function edit($id)
{
   $noteDetails= Notes ::find($id);
    return view('edit',compact('noteDetails'));
}

public function update(Request $request)
{
    $note=Notes::find($request->hidden_id);
    $note->note_title=$request->note_title;
    $note->note_date=$request->note_date;
    $note->note_description=$request->note_description;
    $result= $note->save();

    if($result==1)
    {
        return redirect("/")->with("msg","Note has been updated successfully!");
    }
    else
    {
        return redirect()->back()->with("msg","Something went wrong!");
    } 
}

public function show($id)
{
$note = notes::find($id);
return view('show',compact('note'));
}

public function destroy($id)
{
$note= notes::find($id);
$result= $note->delete();
if($result==1)
    {
        return redirect("/")->with("msg","Note has been deleted successfully!");
    }
    else
    {
        return redirect()->back()->with("msg","Something went wrong!");
    } 

}
}
