@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<span>
					Article by: Roman Garcia
					
					<small>
						<a href="/articles/{{ $article->id }}/edit">Edit</a>
					</small>
				</span>
				
				<span class="pull-right">
					{{ $article->created_at->diffForHumans() }}
				</span>
			</div>
			
			<div class="panel-body">
				{{ $article->content }}
			</div>
		</div>
	</div>
@endsection