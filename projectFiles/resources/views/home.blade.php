@include('partials.header')
<body>
	<h1>Edit a Dynamic Playlist</h1>
		<div class="bodybox">
			<p>Edit a previously created dynamic playlist to the system so that you can assign it to a player.</p>
			<h3>Content Type</h3>
			<form action="" method="POST" class="row">
				<div class="column">
					<select class="dropdown" name="type" id="test">
						<option value=NULL></option>
						<option value="1">Programmatic</option>
						<option value="2">Entertainment</option>
						<option value="3">Venue Specific</option>
					</select>
				</div>
				<div class="column">
					<button>+Add</button>
			</form>
		</div>
</body>