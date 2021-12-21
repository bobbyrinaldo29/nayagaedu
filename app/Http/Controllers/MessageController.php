<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inbox = Message::orderBy('id', 'DESC')->latest()->paginate(10);

        return view('dashboard.admin.message', compact('inbox'));
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
    public function store(MessageRequest $request)
    {
        $data = $request->validated();
        Message::create([
            'name'      => Str::ucfirst($data['name']),
            'email'     => $data['email'],
            'subject'   => $data['subject'],
            'message'   => $data['message'],
        ]);

        return redirect()->route('contact')->withSuccess('Your message has been sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showById = Message::findOrFail($id);
        Message::where('id', $id)->where('read', '0')->update([
            'read' => 1,
        ]);
        return view('dashboard.admin.components.message.show', compact('showById'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $showById = Message::findOrFail($id);
        $inbox = Message::orderBy('id', 'DESC')->latest()->paginate(10);
        Message::where('id', $id)->where('read', '0')->update([
            'read' => 1,
        ]);

        return view('dashboard.admin.message', compact('inbox'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Message::findOrFail($id)->delete();

        return redirect()->route('message.index')->withSuccess('Message has been deleted');
    }
}
