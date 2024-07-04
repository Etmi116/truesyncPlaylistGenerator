<!--livewire bits -->
<div class="bodybox">
    <p>Edit a previously created dynamic playlist to the system so that you can assign it to a player.</p>
    <h3>Playlist Name</h3>
    <input type='text' wire:model.blur="title" class = "wide-text-input" placeholder="Title"></input>
    <div class ="errorMessage">@error('title') {{$message}} @enderror</div>
    <h3>Standard Content</h3>
    <h3>Content Type</h3>
    <!-- Form to add content type to a playlist -->
    <form class="row" wire:submit="addGenre">
        
        <div class="column">
            <select class="dropdown" wire:model="select" name="type" id="test">
                <option value =""></option>
                <option value="Programmatic">Programmatic</option>
                <option value="Entertainment">Entertainment</option>
                <option value="VenueSpecific">Venue Specific</option>
            </select>
        </div>
        <div class="column">
            <button class='blueButton' type="submit">+Add</button>
        </div>
    </form>
    <!--displays title to show dynamic updating on clientside -->
    <h4>{{$title}}</h4>
    <!-- Loops through small database to display chosen content types -->
    @foreach ($genres as $option)
        <div class="row-border">
            <div class="columnB">
                <p>
                    {{ $this->displayGenre($option) }}
                </p>
                <p>
                    {{ $this->timeHelper($option) }}
                </p>
            </div>
            <div class="columnB">
                <input type="number" wire:model.blur="{{$option}}Time" placeholder="Duration"></input>
            </div>
            <div class = "column">
                <button wire:click="removeGenre('{{$option}}')" class="redButton">Remove</button>
            </div>
        </div>
    @endforeach
    <div class ="errorMessage">@error('genres') {{$message}} @enderror</div>
    <form wire:submit="build">
        <button class="blueButton" type="submit">Build My Playlist</button>
    </form>
</div>