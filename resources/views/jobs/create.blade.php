<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form action="/jobs" method="POST">

        <x-forms.input label="Title" name="title" placeholder="Web Developer..." />
        <x-forms.input label="Salary" name="salary" placeholder="$90,000" />
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida US" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/job/webdev-wanted" />

        <x-forms.checkbox label="Feauture (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tag (comma separeted)" name="tags" placeholder="Laracast, video, education" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>

</x-layout>
