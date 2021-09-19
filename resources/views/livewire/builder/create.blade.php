<div class="h-screen flex items-center justify-center">
    <form wire:submit.prevent="save" class="bg-gray-100 rounded shadow p-4 space-y-8">
        <h1 class="text-3xl font-black leading-3 text-blue-700">Style Guide Builder</h1>
        <x-bit.input.group label="Name of Guide" for="name">
            <x-bit.input.text id="name" wire:model="form.name" />
        </x-bit.input.group>
    </form>
</div>
