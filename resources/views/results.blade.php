<x-layout>
    <x-forms.form action="/search" class="mb-8">
        <x-forms.input :label="false" name="q" placeholder="Search somethings..." />
    </x-forms.form>

    <x-page-heading>Results</x-page-heading>

    <div class="space-y-6">
        @foreach($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>
