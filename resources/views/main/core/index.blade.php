@extends('template.template')
<div id="dashboard" class="flex flex-col items-center p-10">
    <div class="max-w-[1300px] w-[calc(100%-8rem)] h-[860px]"> 
        @yield('core-content')
    </div>
</div>