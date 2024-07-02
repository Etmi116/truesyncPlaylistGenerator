@include('partials.header')
<body>
	<h1>Edit a Dynamic Playlist</h1>
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<!--
		<div class="bodybox">
			<p>Edit a previously created dynamic playlist to the system so that you can assign it to a player.</p>
			<h3>Standard Content</h3>
			<h3>Content Type</h3>
			
			<form method="post" action="" class="row">
				@csrf
				<div class="column">
					<select class="dropdown" name="type" id="test">
						<option></option>
						<option value="Programmatic">Programmatic</option>
						<option value="Entertainment">Entertainment</option>
						<option value="Venue Specific">Venue Specific</option>
					</select>
				</div>
				<div class="column">
					<button class='blueButton' type="submit">+Add</button>
				</div>
			</form>
			<div></div>
			
			@foreach($data as $row)
			<div class="row-border">
				<div class="column">
					<p>{{$row->type}}</p>
				</div>
				<div class = "column">
					<button class="blueButton">Delete</button>
				</div>
			</div>
			@endforeach
		</div>
		-->
		<livewire:playlist-params />
</body>