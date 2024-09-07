@props(['job'])

<x-panel class="flex flex-col text-center">
    <a href="{{ $job->url }}" target="_blank">
        <div class="self-start text-sm">{{ $job->employer->name }}</div>

        <div class="px-8 pt-8 flex-1 flex flex-col">
            <h3 class="group-hover:text-blue-800 text-xl mb-auto font-bold transition-colors duration-300">{{ $job->title }}</h3>
            <p class="text-sm mt-4">{{ $job->schedule }} - From {{ $job->salary }}</p>
        </div>
        <div class="flex justify-between items-center mt-auto">
            <div>
                @foreach($job->tags as $tag)
                    <x-tag :$tag size="small" />
                @endforeach
            </div>

            <x-employer-logo :employer="$job->employer" :width="42"/>
        </div>
    </a>
</x-panel>
