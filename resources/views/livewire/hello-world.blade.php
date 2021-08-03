<div>
    <input type="text" wire:model="name" />
    <input type="checkbox" wire:model="loud">
    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>
    {{ implode(', ', $greeting) }} {{ strtoupper($name) }} @if($loud)！ @endif

    <form action="#" wire:submit.prevent="$set('name', 'Bingo')">
        <button type="submit">Reset Name</button>
    </form>
</div>
