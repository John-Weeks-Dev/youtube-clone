<template>
    <div class="relative">
        <div
            class="rounded-lg bg-black m-2"
            :class="[
                show && width > 639
                ? 'absolute z-30 transition ease-in-out delay-150 hover:translate-y-8 hover:scale-125 hover:bg-[#202020] duration-300'
                : ''
            ]"
        >
            <div @mouseover="show = true" @mouseleave="show = false; showVideo = false">
                <img
                    class="aspect-video cursor-pointer"
                    :src="thumbnail || ''"
                    :class="
                        show
                        ? 'transition ease-in-out delay-150 rounded-t-lg'
                        : 'rounded-lg',
                        showVideo ? 'delay-350 hidden' : ''
                    "
                />
                <div class="w-full h-full aspect-video cursor-pointer" :class="showVideo ? '' : 'delay-350 hidden'">
                    <video ref="video" :src="videoUrl || ''" type="video/mp4" />
                </div>
            </div>
            <div>
                <div class="flex mt-1.5">
                    <div>
                        <img
                            class="rounded-full m-1.5 mt-2 flex items-baseline w-8 h-8"
                            :src="image || ''"
                        >
                    </div>
                    <div class="px-1.5 text-white mt-1">
                        <div class="text-[17px] font-extrabold w-full cursor-pointer">{{ title.substring(0, 100) }}</div>
                        <p class="text-[14px] text-gray-300 font-extrabold flex gap-1 items-center cursor-pointer">{{ user.substring(0, 30) }} <CheckCircle fillColor="#888888" :size="17"/></p>
                        <div class="text-sm mb-1 text-gray-300 cursor-pointer">{{ views }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
  import { defineProps, toRefs, ref, watch, onMounted } from 'vue';
  import CheckCircle from 'vue-material-design-icons/CheckCircle.vue'

  const props = defineProps({
    title: String,
    user: String,
    views: String,
    image: String,
    videoUrl: String,
    thumbnail: String,
  })

  const { title, user, views, image, videoUrl, thumbnail } = toRefs(props)

  let show = ref(false)
  let showVideo = ref(false)
  let video = ref(null)
  let width = ref(document.documentElement.clientWidth);

    onMounted(() => {
        window.addEventListener('resize', () => {
            width.value = document.documentElement.clientWidth;
        });
    })

  watch(() => show.value, (show) => {
    if (show) {
        showVideo.value = true
        video.value.play()
        return ''
    }

    showVideo.value = false
    video.value.pause()
    video.value.currentTime = 0
  })
</script>

<style lang="scss" scoped>

</style>
