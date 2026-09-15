<x-layout>
    <x-sidebar>

        <x-bar url="about-me">about me</x-bar>
        <x-bar url="projects">projects</x-bar>
        <x-bar url="story">story</x-bar>
        <x-bar url="education">education</x-bar>
        <x-bar url="contact-me">contact-me</x-bar>

    </x-sidebar>
    {{ $slot }}
    <x-div class="absolute bottom-10">
        <img src="https://skillicons.dev/icons?i=c,html,css,js,php,cs,r,laravel,mysql,supabase,postgres,vite,tailwind,flutter,dart" />
    </x-div>
    
    
</x-layout>