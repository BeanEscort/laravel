{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nome', 'Nome:') !!}
			{!! Form::text('nome') !!}
		</li>
		<li>
			{!! Form::label('slug', 'Slug:') !!}
			{!! Form::text('slug') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}