<x-layout>
    <div class="mt-6 space-y-6">

        <x-forms.form action="/search" class="mt-6">
            <x-forms.input :label="false" name="q" placeholder="Web Developer..." />
        </x-forms.form>

        <x-page-heading>Results</x-page-heading>x-page-headin


        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>
