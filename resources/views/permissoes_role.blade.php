{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('role_id', 'Role_id:') !!}
			{!! Form::text('role_id') !!}
		</li>
		<li>
			{!! Form::label('permissoes_id', 'Permissoes_id:') !!}
			{!! Form::text('permissoes_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}