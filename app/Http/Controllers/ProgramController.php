<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Traits\FileTrait;
use DB;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        //$programs=DB::select('select * from programs');
        $programs=Program::all();
        return view('programs.index',compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {

       
        $request->validate([
            'title' => 'required|unique:programs,title',
            'descripion' => 'required',
            'season'=>'required',
            'creation_year'=>'required',
            'valid_from'=>'required|date',
            'valid_to'=>'required|date|after:valid_from',
            'repeeted'=>'required',
            'sequence'=>'required',
        ]);
        
        try {
            $program_image = FileTrait::uploadFile($request['image_url'],'assets/images');
        } catch(\Exception $e) {
            $e->getMessage();
        }
      
        DB::select('
            INSERT INTO
            programs (
                title,
                season,
                promo_link,
                image_url,
                descripion,
                creation_year,
                repeeted,
                sequence,
                valid_from,
                valid_to,
                created_at,
                updated_at
                )
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?)
        ',[
            $request['title'],
            $request['season'],
            $request['promo_link'],
            $program_image,
            $request['descripion'],
            $request['creation_year'],
            $request['repeeted'],
            $request['sequence'],
            $request['valid_from'],
            $request['valid_to'],
            now()->format('Y-m-d H:i:s'),
            now()->format('Y-m-d H:i:s')
        ]);
          
        

        return redirect()->route('programs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = DB::select('select * from programs where id=?',[$id]);
        $program = count($program) ? $program[0] : null;

        return view('programs.edit',compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
       // dd($request);
         $request->validate([
            'title' => 'required',
            'descripion' => 'required',
            'season'=>'required',
            'creation_year'=>'required',
            'valid_from'=>'required|date',
            'valid_to'=>'required|date|after:valid_from',
            'repeeted'=>'required',
            'sequence'=>'required',
        ]);

         
         if($request['image_url']) {
                $program_image = FileTrait::uploadFile($request['image_url'],'assets/images');

        } else {
            $program =  DB::select('select * from programs where id=?', [$id]);
            $program_image = $program[0]->image_url ?? '';
        }

       // $prog=Program::find($id);

        DB::select('
            update
            programs
            SET
            title=?,
            season=?,
            promo_link=?,
            image_url=?,
            descripion=?,
            creation_year=?,
            repeeted=?,
            sequence=?,
            valid_from=?,
            valid_to=?,
            updated_at=?
            where id=?
        ',[
            $request['title'],
            $request['season'],
            $request['promo_link'],
            $program_image,
            $request['descripion'],
            $request['creation_year'],
            $request['repeeted'],
            $request['sequence'],
            $request['valid_from'],
            $request['valid_to'],
            now()->format('Y-m-d H:i:s'),
            $id
        ]);

        return redirect()->route('programs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        //
    }
}
