<div class="container card mt-2 pt-2 text-end">
    <div>
        <a class="btn btn-success" href="{{ url('movies/add') }}">+ Add</a>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th>Name</th>
                    <th>Additional (if any)</th>
                    <th>Watched</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->name }}</td>
                    
                    <td>{{ $movie->additional ?: '-' }}</td>

                    @if( $movie->status )
                        <td><button class="btn fs-4 p-0" wire:click="unWatched({{ $movie->id }})">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        </button></td>
                    @else
                        <td><button class="btn fs-4 p-0" wire:click="watched({{ $movie->id }})">
                            <i class="fa fa-square-o" aria-hidden="true"></i>
                        </button></td>
                    @endif

                    <td>
                        <button class="btn btn-secondary" wire:click="edit({{ $movie->id }})">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                        <button class="btn btn-danger" wire:click="delete({{ $movie->id }})">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>    
        
    </div>
</div>