@props([
    'selected' => null,
    'tags',
])

<div
    x-on:click.outside="search = ''"
    x-data="{
        selectedTags: {{ ! is_null($selected) ? Js::from($selected) : '[]' }},
        tags: {{ Js::from($tags->map(static fn ($tag) => ['id' => $tag->id, 'name' => $tag->name, 'colour' => $tag->colour])) }},
        search: '',
    }"
>
    <input
        type="text"
        x-model="selectedTags"
        name="selected_tags"
        hidden
    >
    <input
        x-model="search"
        type="text"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500 dark:shadow-sm-light"
    >
    <ul
        x-show="search.length > 0"
    >
        <template
            x-for="(tag, index) in (tags.filter((tag) => tag.name.toLowerCase().includes(search)))"
            :key="index"
        >
            <li
                x-on:click="selectedTags.includes(tag.id) ? selectedTags.splice(selectedTags.indexOf(tag.id), 1) : selectedTags.push(tag.id)"
                x-text="`${tag.name}`"
                class="border p-2 cursor-pointer"
                :class="selectedTags.includes(tag.id) ? `text-${tag.colour}-600` : 'text-gray-500'"
            >
            </li>
        </template>
    </ul>
</div>
