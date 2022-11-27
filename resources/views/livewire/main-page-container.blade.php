<div class="wrapper">

    @livewire('test-drag')


    {{--  @livewire('image-tile')
@livewire('image-tile')
@livewire('image-tile')
@livewire('image-tile')  --}}

    {{-- https://laravel-livewire.com/screencasts/s8-dragging-list <- try this tutorial --}}


</div>


<style>
    .wrapper {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-auto-rows: 100px;
        gap: 10px;
    }

    .wrapper div:nth-child(2) {
        grid-column: 3;
        grid-row: 2 / 4;
    }

    .wrapper div:nth-child(5) {
        grid-column: 1 / 3;
        grid-row: 1 / 3;
    }
</style>
