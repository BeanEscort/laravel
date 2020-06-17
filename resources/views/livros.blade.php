{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('titulo', 'Titulo:') !!}
			{!! Form::text('titulo') !!}
		</li>
		<li>
			{!! Form::label('isbn', 'Isbn:') !!}
			{!! Form::text('isbn') !!}
		</li>
		<li>
			{!! Form::label('autor', 'Autor:') !!}
			{!! Form::text('autor') !!}
		</li>
		<li>
			{!! Form::label('quantidade', 'Quantidade:') !!}
			{!! Form::text('quantidade') !!}
		</li>
		<li>
			{!! Form::label('editorial', 'Editorial:') !!}
			{!! Form::text('editorial') !!}
		</li>
		<li>
			{!! Form::label('foto', 'Foto:') !!}
			{!! Form::text('foto') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}