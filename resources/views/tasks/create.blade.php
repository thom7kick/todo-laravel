@extends('app')
 
@section('content')
<div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">         
                    <a class="navbar-brand">Create Task for Project "{{ $project->name }}"</a>
                </div>
            </div>
        </nav>
    </div>
    
 <div class="container">
    <div class="col-sm-offset-2 col-sm-8">
   		<div class="panel-body"> 
    {!! Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->slug], 'class'=>'']) !!}
        @include('tasks/partials/_form', ['submit_text' => 'Create Task'])
    {!! Form::close() !!}


 </div>
 </div> 
</div>
@endsection
 
