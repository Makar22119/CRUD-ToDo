<!DOCTYPE html>
<html lang="en">
    <x-template>
        <x-slot:styles>
            @vite(['resources/css/main.css'])
        </x-slot:styles>
        <x-slot:title>
            TO-DO Lists
        </x-slot>
        <h2>
            Welcome To My First <br>
            <span style="font-size: 1.2rem">Laravel CRUD Project!</span>
        </h2>
        <div class="about" style="margin-block: 50px;">
            <h2>What can you do here?</h2>
            <div class="about-containers">
                <div class="about-container">
                    <h3>Create An Account</h3>
                </div>
                <div class="about-container">
                    <h3>Manage Tasks</h3>
                </div>
                <div class="about-container">
                    <h3>Become Productive</h3>
                </div>
            </div>
        </div>
    </x-template>
</html>