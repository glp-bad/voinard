<div>
    <h1>Todo List</h1>
    <h2>{{ $carArray['unu'] }}</h2>
    <input type="text" wire:model="todo" placeholder="Add a new todo">
    <button wire:click='add'>Add</button>

    <ul>
        @foreach($todos as $index => $todo)
            <li>
                {{ $todo }}
                <button wire:click="removeTodo({{ $index }})">Remove</button>
            </li>
        @endforeach
    </ul>
</div>
