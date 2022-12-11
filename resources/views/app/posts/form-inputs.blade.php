@php $editing = isset($post) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Title"
            label="Title"
            :value="old('Title', ($editing ? $post->Title : ''))"
            maxlength="255"
            placeholder="Title"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="Body" label="Body" maxlength="255" required
            >{{ old('Body', ($editing ? $post->Body : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
