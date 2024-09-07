<x-layout>
    <x-page-heading>Create Jobs</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$50,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Izhevsk" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://...." />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="Laravel, IT, Developer" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
