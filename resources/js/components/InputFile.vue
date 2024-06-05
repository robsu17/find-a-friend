<template>
    <div>
        <label>
            <span class="block text-blue-dark-primary font-semibold text-base font-nunito"></span>
            <div class="bg-white-light-primary border border-white-light-secondary outline-none p-4 w-full mt-1.5 rounded-xl">
                <input
                    id="photos"
                    type="file"
                    multiple
                    class="hidden"
                    v-on:change="onChangeFile"
                />
                <div class="flex flex-col justify-center items-center h-[150px]">
                    <Icon icon="solar:upload-linear" class="text-blue-dark-primary" width="24" />
                    <p class="text-blue-dark-primary text-lg font-semibold font-nunito mt-4">Arraste e solte o arquivo</p>
                </div>
            </div>
        </label>
        <div id="file_list" class="mt-4 space-y-2"></div>
    </div>
</template>

<script setup lang="ts">
import { Icon } from '@iconify/vue'
import {ref} from "vue";

const emit = defineEmits(['filesSelected'])

function onChangeFile(e: Event & { target: HTMLInputElement } ) {
    const file = e.target.files[0]
    emit('filesSelected', file)
}


</script>
