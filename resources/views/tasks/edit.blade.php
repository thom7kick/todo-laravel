@extends('app')
 
@section('content')
<div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">         
                    <a class="navbar-brand">Edit Task "{{ $task->name }}"</a>
                </div>
            </div>
        </nav>
    </div>
    
 <div class="container">
    <div class="col-sm-offset-2 col-sm-8">
   		<div class="panel-body">
 
    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['projects.tasks.update', $project->slug, $task->slug]]) !!}
        @include('tasks/partials/_form', ['submit_text' => 'Edit Task'])
    {!! Form::close() !!}
 </div>
 </div> 
@endsection