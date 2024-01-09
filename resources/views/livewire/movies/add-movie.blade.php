<div>

  <form wire:submit="save" class="card container my-5 p-4">
    <input type="text" class="form-control" id="id" placeholder="Movie ID" wire:model="movie_id" disabled />

    <div class="mb-3 form-group">
      <label for="exampleFormControlInput1" class="form-label">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" wire:model="name" required />
    </div>

    <div class="mb-3 form-group">
      <label for="exampleFormControlTextarea1">Additional:</label>
      <textarea wire:model="additional" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="mb-3 form-group">
      <label for="exampleFormControlTextarea1">Status:</label>
      <select wire:model="status" name="status" class="form-control" required >
        <option value="0">Not Watched</option>
        <option value="1">Watched</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Add </button>

    <span wire:loading>Saving...</span>
  </form>
</div>