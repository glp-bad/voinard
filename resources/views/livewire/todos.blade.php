<div>
    <h1>Todo List</h1>
    <form wire:submit.prevent="addTodo">
        <input type="text" wire:model="newTodo" placeholder="Add a new todo">
        <button type="submit">Add</button>
    </form>

    <ul>
        @foreach($todos as $index => $todo)
            <li>
                {{ $todo }}
                <button wire:click="removeTodo({{ $index }})">Remove</button>
            </li>
        @endforeach
    </ul>
</div>
