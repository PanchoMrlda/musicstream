<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Config\SlackMessageSender;

class MessagesController extends Controller
{
  public function submit(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'message' => 'required'
    ]);    
    // Create a Message
    $message = new Message;
    $message->name = $request->input('name');
    $message->email = $request->input('email');
    $message->message = $request->input('message');
    // Save the Message
    $message->save();
    // Redirect
    return redirect('/')->with('success', 'Message Sent');
  }

  /**
   * GET /messages
   */
  public function index(Request $request)
  {
    return true;
  }

  /**
   * GET /messages/:id
   */
  public function show($id)
  {
    return $id;
  }

  /**
   * POST /messages
   */
  public function store(Request $request)
  {
    $messageToSend = $request->text;
    $slackNotifier = new SlackMessageSender();
    $slackNotifier->sendMessage($messageToSend);
    return $messageToSend;
  }

  /**
   * PUT /messages/:id
   */
  public function update(Request $request, $id)
  {
    return $id;
  }

  /**
   * DELETE /messages/:id
   */
  public function destroy($id)
  {
    return $id;
  }
}
