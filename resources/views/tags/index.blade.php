@extends('pages.main')
@section('content')
 <div class="row">
     <div class="col-md-8">
         <h1>Tags</h1>
         <table class="table">
             <thead>
                 <th>#</th>
                 <th>Name</th>
             </thead>
             <tbody>
                 @foreach ($tags as $tag)
                     <tr>
                     <th>{{$tag->id}}</th>
                     <th>{{$tag->name}}</th>
                     <th><a href="{{route('tags.show',$tag->id)}}" class="btn btn-default btn-primary">View</a></th>
                     </tr>
                 @endforeach
             </tbody>
         </table>
     </div>
     <div class="col-md-4">
         <div class="well">
             {!! Form::open(['route'=> 'tags.store', 'method'=> 'POST'])!!}
             <h2>New Tag</h2>
             {{Form::label('name', 'Name:')}}
             {{Form::text('name',null, ['class' =>'form-control'])}}
             {{Form::submit('Create new Tag', ['class' => 'btn btn-primary btn-block'])}}

             {!! Form::close()!!}

         </div>
     </div>
 </div>   
@endsection