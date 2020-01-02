@extends('layouts.corphtml', ['title' => 'Pages test'])

@section('bloc_body')
<h1>Pages test</h1>
 <p>les liens qui ramènes à nos pages tests</p> <nav>
	<ul>
		<li><a href='publication'>publication</a></li>
		<li><a href='evenement'>evenement</a></li>
	</ul>
</nav>


@endsection