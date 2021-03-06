@extends('pages.main')
@section('content')
 <div class="row">
     <div class="col-md-8">
         <h1>Categories</h1>
         <table class="table">
             <thead>
                 <th>#</th>
                 <th>Name</th>
             </thead>
             <tbody>
                 @foreach ($categories as $category)
                     <tr>
                     <th>{{$category->id}}</th>
                     <th>{{$category->name}}</th>
                     </tr>
                 @endforeach
             </tbody>
         </table>
     </div>
     <div class="col-md-4">
         <div class="well">
             {!! Form::open(['route'=> 'categories.store', 'method'=> 'POST'])!!}
             <h2>New Category</h2>
             {{Form::label('name', 'Name:')}}
             {{Form::text('name',null, ['class' =>'form-control'])}}
             {{Form::submit('Create new Category', ['class' => 'btn btn-primary btn-block'])}}
             {!! Form::close()!!}
         </div>
     </div>
 </div>   
@endsection