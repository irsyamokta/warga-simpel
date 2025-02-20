@extends('index')
<x-header />
<div class="flex justify-start items-start min-h-screen pt-24 px-10">
    <div class="bg-transparent p-6 rounded-lg shadow-lg w-full max-w-3xl">
        <div class="flex items-center mb-6 ml-2">
            <span class="text-green-950 text-4xl font-semibold">PENGAJUAN SURAT</span>
        </div>
        <x-letters.sku />
        <x-letters.skl />
        <x-letters.skaw />
        <x-letters.skjd />
        <x-letters.sktm />
        <x-letters.skk />
        <x-letters.skpp />
        <x-letters.sp />
        <x-letters.sd />
    </div>
</div>
