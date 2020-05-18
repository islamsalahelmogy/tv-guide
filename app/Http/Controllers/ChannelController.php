<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Traits\FileTrait;
use DB;

class ChannelController extends Controller
{
    use FileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$channels = DB::select('select * from channels');
        $channels=Channel::all();
        return view('channels.index',compact('channels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('channels.create');
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
            'name' => 'required|unique:channels,name',
            'description' => 'required',
        ]);
     
        try {
            $channel_image = FileTrait::uploadFile($request['image'],'assets/images');
        } catch(\Exception $e) {
            $e->getMessage();
        }
       // dd($request);
        DB::select('
            INSERT INTO
            channels (
                name,
                image,
                description,
                created_at,
                updated_at
                )
                VALUES (?,?,?,?,?)
        ',[
            $request['name'],
            $channel_image,
            $request['description'],
            now()->format('Y-m-d H:i:s'),
            now()->format('Y-m-d H:i:s')
        ]);


        return redirect()->route('channels');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function show(Channel $channel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $channel = DB::select('select * from channels where id=?',[$id]);
        $channel = count($channel) ? $channel[0] : null;

        return view('channels.edit',compact('channel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $request->validate([
            'name' => 'required|unique:channels,name,'. $id
        ]);

         if($request['image']) {
            try {
                $channel_image = FileTrait::uploadFile($request['image'],'assets/images');
            } catch(\Exception $e) {
            }
        } else {
            $channel =  DB::select('select * from channels where id=?', [$id]);
            $channel_image = $channel[0]->image ?? '';
        }

        DB::select('
            update
            channels
            SET
            name=?,
            image=?,
            description=?,
            updated_at=?
            where id=?
        ',[
            $request['name'],
            $channel_image,
            $request['description'],
            now()->format('Y-m-d H:i:s'),
            $id
        ]);

        return redirect()->route('channels');
    }

    public function profile(Channel $channel)
    {
        $programs= $channel->program_times; 
        return view('channels.profile',compact('programs','channel'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Channel $channel)
    {
        //
    }
}
