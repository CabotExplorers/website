@extends('layouts.main')
@section('title', 'Calendar')
@section('content')
<section class="calendar page pad space">
<!-- Will eventually replace this with an native implementation, but this'll do for now... -->
	<div class="container">
		<div class="row">
			<div class="col col-12">
				<h1>District Explorer Calendar</h1>
			</div>

			<div class="col col-12">
				 <iframe src="https://calendar.google.com/calendar/embed?title=%20&amp;showTz=0&amp;wkst=2&amp;bgcolor=%23f7f8f9&amp;src=Y2Fib3RleHBsb3JlcnMub3JnLnVrXzFkbGk0dG11cWE4cXA1NHVhMWo5NXA1cDYwQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;src=Y2Fib3RleHBsb3JlcnMub3JnLnVrXzUxODdsZXJidWtnYzA1b2JyYWo2Z3IyZTM4QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;src=Y2Fib3RleHBsb3JlcnMub3JnLnVrX3Blc3IzbXJlZzg4Mzd1ODVsMDdqY2RxYjcwQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;src=Y2Fib3RleHBsb3JlcnMub3JnLnVrX3BrbTFmN2M3dDZ0N2lqNGMwbnB2MWF1aTFrQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23182C57&amp;src=34brbi6cbjdo30a725ln6qusms%40group.calendar.google.com&amp;color=%23711616&amp;ctz=Europe%2FLondon" scrolling="no"></iframe>
			 </div>
		</div>
	</div>
</section>
@endsection
