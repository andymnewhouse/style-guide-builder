<x-bit.input.group for="{{ $el }}-width" label="{{ strtoupper($el) }} Width">
    <x-bit.input.select id="{{ $el }}-width" class="block w-full mt-1" name="{{ $el }}-width" wire:model="form.{{ $group }}.{{ $el }}.width">
        <option value="w-1">w-1</option>
    <option value="w-1.5">w-1.5</option>
    <option value="w-2">w-2</option>
    <option value="w-2.5">w-2.5</option>
    <option value="w-3">w-3</option>
    <option value="w-3.5">w-3.5</option>
    <option value="w-4">w-4</option>
    <option value="w-5">w-5</option>
    <option value="w-6">w-6</option>
    <option value="w-7">w-7</option>
    <option value="w-8">w-8</option>
    <option value="w-9">w-9</option>
    <option value="w-10">w-10</option>
    <option value="w-11">w-11</option>
    <option value="w-12">w-12</option>
    <option value="w-14">w-14</option>
    <option value="w-16">w-16</option>
    <option value="w-20">w-20</option>
    <option value="w-24">w-24</option>
    <option value="w-28">w-28</option>
    <option value="w-32">w-32</option>
    <option value="w-36">w-36</option>
    <option value="w-40">w-40</option>
    <option value="w-44">w-44</option>
    <option value="w-48">w-48</option>
    <option value="w-52">w-52</option>
    <option value="w-56">w-56</option>
    <option value="w-60">w-60</option>
    <option value="w-64">w-64</option>
    <option value="w-72">w-72</option>
    <option value="w-80">w-80</option>
    <option value="w-96">w-96</option>
    </x-bit.input.select>
</x-bit.input.group>
