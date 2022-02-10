<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){

            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
            
        }else {
            $events = Event::all();   
        }

        return view('welcome',
        [
            'events'=>$events,
            'search'=>$search
        ]);
    }
    
    public function create(){
        return view('events.create');
    }

    public function store(Request $request){

        $event = new Event;
        $event->title = $request->title;
        $event->date = $request->date;
        $event->City = $request->city;
        $event->description = $request->description;
        $event->private = $request->private;
        $event->item = $request->item;

        //Validação do campo imagem
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image; //captura do atributo image
            $extension = $requestImage->extension(); //Captua da extensão do arquivo
            // Criando o novo nome do arquivo, usando um hash em mds + a data e hora do momento do UpLoad + a extnsão do arquivo.
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path("img/events"), $imageName);

            $event->image = $imageName;

        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect("/")->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id){
        $event = Event::findorfail($id);
        
        return view("events.show", ["event"=>$event]);
    }
}
