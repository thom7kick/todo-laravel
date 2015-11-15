@extends('app')
 
@section('content')
<div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">         
                    <a class="navbar-brand" href="#">{{ $project->name }}</a>
                </div>
            </div>
        </nav>
    </div>
    
 <div class="container">
    <div class="col-sm-offset-2 col-sm-8">
  
 
    @if ( !$project->tasks->count() )
        <div class="bg-info">         
            Your project has no tasks.
        </div>
        
    @else

    <div class="panel panel-default">
        <div class="panel-heading">
            Todo tasks
        </div>

        <div class="panel-body">
            <table class="table table-striped project-table">
                <thead>
                <th>Tasks</th>
                <th>&nbsp;</th>
                </thead>
                <tbody>
        
                @foreach( $project->tasks as $task )
                     <tr>
                            <td class="table-text"><div>
                
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.tasks.destroy', $project->slug, $task->slug))) !!}
                        <a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a></div></td>
                        
                            <td>{!! link_to_route('projects.tasks.edit', 'Edit', array($project->slug, $task->slug), array('class' => 'fa fa-plus btn btn-info')) !!}</td>
 
                            <td>{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</td>
                        
                    {!! Form::close() !!}
                
                 @endforeach
                       </tbody>
                    </table>
                </div>
            </div>        
    @endif
 
   <div class="panel-footer">
    <table class="table-striped">
        <tbody>
    <tr>
        <td>{!! link_to_route('projects.index', 'Back to Projects') !!}</td> 
        <td>{!! link_to_route('projects.tasks.create', 'Create Task', $project->slug) !!}</td>
    </tr>
     </tbody>
    </table>
     </div>
    </div>   
</div> 
@endsection