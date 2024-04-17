@props(['pname'])
<div>
    <label for="{{$pname}}">
        <span class="uppercase">{{$pname}} :</span> 
        <input 
            id="{{$pname}}" 
            placeholder="Write your {{$pname}}..." 
            name="{{$pname}}" 
            {{ $attributes->merge(['class' => 'px-3 py-1 rounded-lg bg-white-100 border border-gray-500 ']) }}>
    </label>
    @error($pname)
        <p class="text-red-500 font-semibold text-xs">{{ $message }}</p> 
    @enderror
</div>