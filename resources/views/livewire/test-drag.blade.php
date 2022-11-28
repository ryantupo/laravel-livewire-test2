<div>
    <ul drag-root class="overflow-hidden rounded shadow divide-y content-center">
        @foreach ($tasks as $task)
            <li drag-item draggable="true" wire:key=`{{ $task['id'] }}` class="m-0 w-64 p-4 bg-grey-300">
                {{ $task['title'] }}
            </li>
        @endforeach
    </ul>
</div>
