<x-bit.input.group for="{{ $el }}-background-color" label="{{ strtoupper($el) }} Background Color">
    <x-bit.input.select id="{{ $el }}-background-color" class="block w-full mt-1" name="{{ $el }}-background-color" wire:model="form.{{ $group }}.{{ $el }}.background-color">
        <option value="from-sapphire hover:to-blue-700">Gradient</option>
        <option value="bg-sapphire">Sapphire</option>
        <option value="bg-blue-700">Blue</option>
        <option value="bg-blue-750">Blue Darker</option>
        <option value="bg-gray-50">Gray 50</option>
        <option value="bg-gray-100">Gray 100</option>
        <option value="bg-gray-200">Gray 200</option>
        <option value="bg-gray-300">Gray 300</option>
        <option value="bg-gray-400">Gray 400</option>
        <option value="bg-gray-500">Gray 500</option>
        <option value="bg-gray-600">Gray 600</option>
        <option value="bg-gray-700">Gray 700</option>
        <option value="bg-gray-800">Gray 800</option>
        <option value="bg-gray-900">Gray 900</option>
        <option value="bg-white">White</option>
        <option value="bg-black">Black</option>
    </x-bit.input.select>
</x-bit.input.group>
