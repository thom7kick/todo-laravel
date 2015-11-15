
@extends('app')
 
@section('content')

<div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">         
                    <a class="navbar-brand" href="#">Project List</a>
                </div>
            </div>
        </nav>
    </div>
    
 <div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        
    @if ( !$projects->count() )

        You have no projects
    @else
    <div class="panel panel-default">
        <div class="panel-heading">
            Current Projects
        </div>

        <div class="panel-body">
            <table class="table table-striped project-table">
                <thead>
                <th>Projects</th>
                <th>&nbsp;</th>
                </thead>
                <tbody>
                    @foreach( $projects as $project )
                        <tr>
                            <td class="table-text"><div>
                            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                                <a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a></div></td>
                                
                                    <td>{!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info fa fa-plus')) !!}</td>
                                    
                                    <td>{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</td>
                                
                            {!! Form::close() !!}
                        </tr>
                    @endforeach
                       </tbody>
                    </table>
                </div>
            </div>
            @endif

            <div class="panel-footer">
                 {!! link_to_route('projects.create', 'Create Project') !!}
            </div>
    </div>   
</div> 
@endsection
