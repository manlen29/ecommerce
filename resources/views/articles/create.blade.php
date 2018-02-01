@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				Create article
			</div>
			
			<div class="panel-body">
				<form action="/articles" method="post">
					{{ csrf_field() }}
					
					<div class="form-group">
						<label for="content">Content</label>
						<textarea name="content" class="form-control"></textarea>
					</div>
					
					<div class="checkbox">
						<label>
							<input type="checkbox" name="live">Live
						</label>
					</div>
					
					<div class="form-group">
						<label for="post_on">Post on</label>
						
						<input type="datetime-local" name="post_on" class="form-control">
					
					</div>
					
					<input type="submit" class="btn btn-success pull-right">
				</form>
			</div>
		</div>
	</div>
@endsection