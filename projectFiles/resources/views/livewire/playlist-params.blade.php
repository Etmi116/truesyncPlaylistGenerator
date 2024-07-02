<!--livewire bits -->
<div class="bodybox">
    <p>Edit a previously created dynamic playlist to the system so that you can assign it to a player.</p>
    <h3>Standard Content</h3>
    <h3>Content Type</h3>
    <!-- Form to add content type to a playlist -->
    <form class="row" wire:submit="add">
        
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
    <!-- Loops through small database to display chosen content types -->
    @foreach ($genres as $select)
        <div class="row-border">
            <div class="column">
                <p>{{$select}}</p>
            </div>
            <div class = "column">
                <button wire:click="remove('{{$select}}')" class="blueButton">Delete</button>
            </div>
        </div>
    @endforeach
    
</div>