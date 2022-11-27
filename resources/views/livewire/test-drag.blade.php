<div>

    @php

     $data ='[{"id":"1","title":"title1"}]';

     $tasks = json_decode($data);
    @endphp
    <ul wire:sortable="updateTaskOrder">
        @foreach ($tasks as $task)
            <li wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
                <h4 wire:sortable.handle>{{ $task->title }}</h4>
                <button wire:click="removeTask({{ $task->id }})">Remove</button>
            </li>
        @endforeach
    </ul>
</div>
