@extends('app')
 
@section('content')
<div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">         
                    <a class="navbar-brand">{{ $task->name }}</a>
                </div>
            </div>
        </nav>
    </div>
    
 <div class="container">
    <div class="">
   		<div class="panel-heading bg-success">
        {!! link_to_route('projects.show', $project->name, [$project->slug]) !!} 
    </div>

    <div class="panel-body  bg-warning">
        	 {{ $task->description }}
		</div>  

</div>   
</div>
@endsection