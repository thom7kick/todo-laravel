@extends('app')
 
@section('content')
<div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">         
                    <a class="navbar-brand">Create Project</a>
                </div>
            </div>
        </nav>
    </div>
    
 <div class="container">
    <div class="col-sm-offset-2 col-sm-8">
   		<div class="panel-body">
    
 
    {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
        @include('projects/partials/_form', ['submit_text' => 'Create Project'])
    {!! Form::close() !!}


 </div>
 </div> 
</div>
@endsection
 
