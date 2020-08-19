@extends('layouts.base')

@section('pageTitle')
    Events and Shows
@endsection

@section('content')
    <div class="section container">
        @if(!empty($events))
           <div class="columns is-centered">
               <div class="column is-10">
                   <div class="card section container">
                       <table class="table">
                           <thead>
                           <tr>
                               <th>Where</th>
                               <th>When</th>
                               <th>Why</th>
                               <th>Who</th>
                               <th>Updated</th>
                           </tr>
                           </thead>
                           <tbody>
                           @foreach($events as $event)
                               <tr>
                                   <td>{{ $event->venue }}</td>
                                   <td>{{ $event->start_time }}</td>
                                   <td>{{ $event->description }}</td>
                                   <td>{{ $event->playing_with }}</td>
                                   <td>{{ $event->updated_at }}</td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
        @else


        @endif
    </div>
@endsection











