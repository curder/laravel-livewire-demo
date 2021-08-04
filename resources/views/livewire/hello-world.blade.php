<div>
    @foreach($contacts as $contact)
        <div>
            @livewire('say-hi', ['contact' => $contact], key($contact->name))
            <button wire:click="removeContact('{{ $contact->name }}')">Remove</button>
        </div>
    @endforeach

    <hr>

    {{ now() }}
</div>
