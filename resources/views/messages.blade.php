@extends('layouts.dashboard')
@section('page_heading','Messages')
@section('section')
    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-striped">
                    <tbody>
                    @foreach($messages as $message)

                            <tr>
                                <td>{{ $message->sender->name}}</td>
                                <td>
                                    <a href="/messages/{{$message->id_message}}">
                                        {{ $message->subject }}
                                    </a>
                                </td>

                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="col-sm-6">
        @if($id != 0)
            @foreach($messages as $message)

               @if($message->id_message == $id)
                   <h3>{{ $message->sender->name}}</h3>
                        <b>{{ $message->subject }} </b>
                    <div>{{$messages[$id]->body}}</div>
                @endif
            @endforeach

        @endif


    </div>
    <div class="col-sm-3">
        <p> New Message</p>
    </div>

@stop
