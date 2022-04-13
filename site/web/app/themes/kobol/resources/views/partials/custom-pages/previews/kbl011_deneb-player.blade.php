{{-- Function for audio player --}}
@push('scripts')
    <script>
        function playaudio() {
            return {
                currentlyPlaying: false,

                playAndStop() {
                    if (this.currentlyPlaying) {
                        this.$refs.audio.pause();
                        this.$refs.audio.currentTime = 0;
                        this.currentlyPlaying = false;
                    } else {
                        this.$refs.audio.play();
                        this.currentlyPlaying = true;
                    }
                }
            }
        }
    </script>
@endpush 
<svg class="relative block bg-[#24292d]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
    <path d="M1200 0L0 0 892.25 114.72 1200 0z" class="fill-[#616d77] shadow-md"></path>
</svg>
<div class="mb-0 text-neutral-800">
    <div class="bg-[#24292d] py-12 pb-16">
        <div class="xs:mx-3 sm:mx-6 md:mx-24 4xl:mx-96 xs:py-5 md:py-10 py-12 mb:4 xl:mb-12 xl:flex xl:justify-center">
            <div class="bg-[#f5f5f5] dark:bg-neutral-300 shadow-md bg-clip-border border-8 border-[#40474c] rounded-md md:px-2 lg:px-4 2xl:px-10 sm:mx-2 mx-4 xl:w-4/5">                   
                
                <h2 class="font-bold font-display xs:text-base sm:text-2xl text-4xl text-center pt-4">Preset Previews</h2>              
                
                <div class="grid xs:gap-2 sm:gap-8 xs:grid-cols-1 sm:grid-cols-2 px-2.5 xs:py-4 py-102">        
{{-- 
    TODO: RENAME each player so it has the correct name and category as a Tittle 

    Check how to color the bg when playing so that we see time elapsed
    Must include a way to limit playback to 1 preview at time / Integrate play/pause/auto-stop
    Reset player UI after playback ends

    Alpine.js Magic: https://github.com/alpinejs/alpine/discussions/693
--}}
                    <div class="my-4 xs:flex xs:items-start " x-data="playaudio()">
                        <div class="grid xs:flex xs:items-start lg:grid-cols-3 xs:ml-4 sm:ml-4">
                            <button @click="playAndStop" type="button" class="h-9 w-9 relative rounded-xl group cursor-pointer mx-auto my-auto">
                                <div x-show="!currentlyPlaying" class="bg-neutral-900 rounded-full p-0.5">
                                    <svg class="w-8 h-8 text-neutral-100 text-opacity-0 hover:text-opacity-10 fill-current transition duration-1000 ease-in-out rounded-full hover:scale-125" viewBox="0 0 284 284" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-neutral-100" d="M184.197 129.243L135.177 96.5521C132.865 95.01 130.178 94.1249 127.403 93.9915C124.628 93.8581 121.868 94.4813 119.419 95.7946C116.971 97.1079 114.925 99.0619 113.501 101.448C112.077 103.834 111.327 106.562 111.333 109.34V174.706C111.333 177.482 112.086 180.206 113.513 182.588C114.939 184.969 116.985 186.919 119.433 188.228C121.881 189.538 124.638 190.158 127.411 190.024C130.183 189.889 132.867 189.004 135.177 187.463L184.197 154.773C186.297 153.373 188.019 151.475 189.21 149.25C190.401 147.025 191.024 144.54 191.024 142.015C191.024 139.491 190.401 137.006 189.21 134.781C188.019 132.555 186.297 130.658 184.197 129.258V129.243Z"></path>
                                        {{-- <path class="stroke-neutral-100" d="M280 142C280 160.122 276.431 178.067 269.495 194.81C262.56 211.553 252.395 226.766 239.581 239.581C226.766 252.395 211.553 262.56 194.81 269.495C178.067 276.431 160.122 280 142 280C123.878 280 105.933 276.431 89.1897 269.495C72.4468 262.56 57.2337 252.395 44.4193 239.581C31.6048 226.766 21.4398 211.553 14.5046 194.81C7.56947 178.067 4 160.122 4 142C4 105.4 18.5392 70.2993 44.4193 44.4193C70.2993 18.5392 105.4 4 142 4C178.6 4 213.701 18.5392 239.581 44.4193C265.461 70.2993 280 105.4 280 142Z" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path> --}}
                                    </svg>
                                </div>
                                <div x-show="currentlyPlaying" class="bg-neutral-900 bg-opacity-30 rounded-full p-0.5 xs:w-[190px] sm:w-[240px]">
                                    <svg class="w-8 h-8 text-neutral-100 fill-neutral-100 text-opacity-0 transition duration-150 ease-in-out hover:text-opacity-10" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                            <div class="bg-blend-overlay xs:mx-4 text-left xs:text-xs xs:font-light xs:tracking-tight sm:text-sm sm:font-normal sm:tracking-normal my-auto sm:mx-0 px-0 col-span-2">
                                <div class="sm:ml-2 xl:ml-4 lg:my-2.5">Bass - Superman Punch</div>
                            </div>
                        </div>
                        <audio x-ref="audio">
                            <source src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb00_superman_punch_a.mp3" type="audio/mp3"/>
                        </audio>
                    </div>
                    <div class="my-4 xs:flex xs:items-start " x-data="playaudio()">
                        <div class="grid xs:flex xs:items-start lg:grid-cols-3 xs:ml-4 sm:ml-4">
                            <button @click="playAndStop" type="button" class="h-9 w-9 relative rounded-xl group cursor-pointer mx-auto my-auto">
                                <div x-show="!currentlyPlaying" class="bg-neutral-900 rounded-full p-0.5">
                                    <svg class="w-8 h-8 text-neutral-100 text-opacity-0 hover:text-opacity-10 fill-current transition duration-1000 ease-in-out rounded-full hover:scale-125" viewBox="0 0 284 284" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-neutral-100" d="M184.197 129.243L135.177 96.5521C132.865 95.01 130.178 94.1249 127.403 93.9915C124.628 93.8581 121.868 94.4813 119.419 95.7946C116.971 97.1079 114.925 99.0619 113.501 101.448C112.077 103.834 111.327 106.562 111.333 109.34V174.706C111.333 177.482 112.086 180.206 113.513 182.588C114.939 184.969 116.985 186.919 119.433 188.228C121.881 189.538 124.638 190.158 127.411 190.024C130.183 189.889 132.867 189.004 135.177 187.463L184.197 154.773C186.297 153.373 188.019 151.475 189.21 149.25C190.401 147.025 191.024 144.54 191.024 142.015C191.024 139.491 190.401 137.006 189.21 134.781C188.019 132.555 186.297 130.658 184.197 129.258V129.243Z"></path>
                                        {{-- <path class="stroke-neutral-100" d="M280 142C280 160.122 276.431 178.067 269.495 194.81C262.56 211.553 252.395 226.766 239.581 239.581C226.766 252.395 211.553 262.56 194.81 269.495C178.067 276.431 160.122 280 142 280C123.878 280 105.933 276.431 89.1897 269.495C72.4468 262.56 57.2337 252.395 44.4193 239.581C31.6048 226.766 21.4398 211.553 14.5046 194.81C7.56947 178.067 4 160.122 4 142C4 105.4 18.5392 70.2993 44.4193 44.4193C70.2993 18.5392 105.4 4 142 4C178.6 4 213.701 18.5392 239.581 44.4193C265.461 70.2993 280 105.4 280 142Z" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path> --}}
                                    </svg>
                                </div>
                                <div x-show="currentlyPlaying" class="bg-neutral-900 bg-opacity-30  rounded-full p-0.5  xs:w-[190px] sm:w-[240px]">
                                    <svg class="w-8 h-8 text-neutral-100 fill-neutral-100 text-opacity-0 transition duration-150 ease-in-out hover:text-opacity-10" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                            <div class="bg-blend-overlay xs:mx-4 text-left xs:text-xs xs:font-light xs:tracking-tight sm:text-sm sm:font-normal sm:tracking-normal my-auto sm:mx-0 px-0 col-span-2 ">
                                <div class="sm:ml-2 xl:ml-4 lg:my-2.5">Bass - Choke</div>
                            </div>
                        </div>
                        <audio x-ref="audio">
                            <source src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb01_choke_a.mp3" type="audio/mp3"/>
                        </audio>
                    </div>
                    <div class="my-4 xs:flex xs:items-start " x-data="playaudio()">
                        <div class="grid xs:flex xs:items-start lg:grid-cols-3 xs:ml-4 sm:ml-4">
                            <button @click="playAndStop" type="button" class="h-9 w-9 relative rounded-xl group cursor-pointer mx-auto my-auto">
                                <div x-show="!currentlyPlaying" class="bg-neutral-900 rounded-full p-0.5">
                                    <svg class="w-8 h-8 text-neutral-100 text-opacity-0 hover:text-opacity-10 fill-current transition duration-1000 ease-in-out rounded-full hover:scale-125" viewBox="0 0 284 284" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-neutral-100" d="M184.197 129.243L135.177 96.5521C132.865 95.01 130.178 94.1249 127.403 93.9915C124.628 93.8581 121.868 94.4813 119.419 95.7946C116.971 97.1079 114.925 99.0619 113.501 101.448C112.077 103.834 111.327 106.562 111.333 109.34V174.706C111.333 177.482 112.086 180.206 113.513 182.588C114.939 184.969 116.985 186.919 119.433 188.228C121.881 189.538 124.638 190.158 127.411 190.024C130.183 189.889 132.867 189.004 135.177 187.463L184.197 154.773C186.297 153.373 188.019 151.475 189.21 149.25C190.401 147.025 191.024 144.54 191.024 142.015C191.024 139.491 190.401 137.006 189.21 134.781C188.019 132.555 186.297 130.658 184.197 129.258V129.243Z"></path>
                                        {{-- <path class="stroke-neutral-100" d="M280 142C280 160.122 276.431 178.067 269.495 194.81C262.56 211.553 252.395 226.766 239.581 239.581C226.766 252.395 211.553 262.56 194.81 269.495C178.067 276.431 160.122 280 142 280C123.878 280 105.933 276.431 89.1897 269.495C72.4468 262.56 57.2337 252.395 44.4193 239.581C31.6048 226.766 21.4398 211.553 14.5046 194.81C7.56947 178.067 4 160.122 4 142C4 105.4 18.5392 70.2993 44.4193 44.4193C70.2993 18.5392 105.4 4 142 4C178.6 4 213.701 18.5392 239.581 44.4193C265.461 70.2993 280 105.4 280 142Z" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path> --}}
                                    </svg>
                                </div>
                                <div x-show="currentlyPlaying" class="bg-neutral-900 bg-opacity-30  rounded-full p-0.5  xs:w-[190px] sm:w-[240px]">
                                    <svg class="w-8 h-8 text-neutral-100 fill-neutral-100 text-opacity-0 transition duration-150 ease-in-out hover:text-opacity-10" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                            <div class="bg-blend-overlay xs:mx-4 text-left xs:text-xs xs:font-light xs:tracking-tight sm:text-sm sm:font-normal sm:tracking-normal my-auto sm:mx-0 px-0 col-span-2">
                                <div class="sm:ml-2 xl:ml-4 lg:my-2.5">Bass - Brick</div>
                            </div>
                        </div>
                        <audio x-ref="audio">
                            <source src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb02_brick_d.mp3" type="audio/mp3"/>
                        </audio>
                    </div>
                    <div class="my-4 xs:flex xs:items-start " x-data="playaudio()">
                        <div class="grid xs:flex xs:items-start lg:grid-cols-3 xs:ml-4 sm:ml-4">
                            <button @click="playAndStop" type="button" class="h-9 w-9 relative rounded-xl group cursor-pointer justify-end mx-auto my-auto">
                                <div x-show="!currentlyPlaying" class="bg-neutral-900 rounded-full p-0.5">
                                    <svg class="w-8 h-8 text-neutral-100 text-opacity-0 hover:text-opacity-10 fill-current transition duration-1000 ease-in-out rounded-full hover:scale-125" viewBox="0 0 284 284" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-neutral-100" d="M184.197 129.243L135.177 96.5521C132.865 95.01 130.178 94.1249 127.403 93.9915C124.628 93.8581 121.868 94.4813 119.419 95.7946C116.971 97.1079 114.925 99.0619 113.501 101.448C112.077 103.834 111.327 106.562 111.333 109.34V174.706C111.333 177.482 112.086 180.206 113.513 182.588C114.939 184.969 116.985 186.919 119.433 188.228C121.881 189.538 124.638 190.158 127.411 190.024C130.183 189.889 132.867 189.004 135.177 187.463L184.197 154.773C186.297 153.373 188.019 151.475 189.21 149.25C190.401 147.025 191.024 144.54 191.024 142.015C191.024 139.491 190.401 137.006 189.21 134.781C188.019 132.555 186.297 130.658 184.197 129.258V129.243Z"></path>
                                        {{-- <path class="stroke-neutral-100" d="M280 142C280 160.122 276.431 178.067 269.495 194.81C262.56 211.553 252.395 226.766 239.581 239.581C226.766 252.395 211.553 262.56 194.81 269.495C178.067 276.431 160.122 280 142 280C123.878 280 105.933 276.431 89.1897 269.495C72.4468 262.56 57.2337 252.395 44.4193 239.581C31.6048 226.766 21.4398 211.553 14.5046 194.81C7.56947 178.067 4 160.122 4 142C4 105.4 18.5392 70.2993 44.4193 44.4193C70.2993 18.5392 105.4 4 142 4C178.6 4 213.701 18.5392 239.581 44.4193C265.461 70.2993 280 105.4 280 142Z" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path> --}}
                                    </svg>
                                </div>
                                <div x-show="currentlyPlaying" class="bg-neutral-900 bg-opacity-30  rounded-full p-0.5  xs:w-[190px] sm:w-[240px]">
                                    <svg class="w-8 h-8 text-neutral-100 fill-neutral-100 text-opacity-0 transition duration-150 ease-in-out hover:text-opacity-10" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                            <div class="bg-blend-overlay xs:mx-4 text-left xs:text-xs xs:font-light xs:tracking-tight sm:text-sm sm:font-normal sm:tracking-normal my-auto sm:mx-0 px-0 col-span-2 ">
                                <div class="sm:ml-2 xl:ml-4 lg:my-2.5">Bass - Wing</div>
                            </div>
                        </div>
                        <audio x-ref="audio">
                            <source src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb03_wing_a.mp3" type="audio/mp3"/>
                        </audio>
                    </div>
                    <div class="my-4 xs:flex xs:items-start " x-data="playaudio()">
                        <div class="grid xs:flex xs:items-start lg:grid-cols-3 xs:ml-4 sm:ml-4">
                            <button @click="playAndStop" type="button" class="h-9 w-9 relative rounded-xl group cursor-pointer mx-auto my-auto">
                                <div x-show="!currentlyPlaying" class="bg-neutral-900 rounded-full p-0.5">
                                    <svg class="w-8 h-8 text-neutral-100 text-opacity-0 hover:text-opacity-10 fill-current transition duration-1000 ease-in-out rounded-full hover:scale-125" viewBox="0 0 284 284" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-neutral-100" d="M184.197 129.243L135.177 96.5521C132.865 95.01 130.178 94.1249 127.403 93.9915C124.628 93.8581 121.868 94.4813 119.419 95.7946C116.971 97.1079 114.925 99.0619 113.501 101.448C112.077 103.834 111.327 106.562 111.333 109.34V174.706C111.333 177.482 112.086 180.206 113.513 182.588C114.939 184.969 116.985 186.919 119.433 188.228C121.881 189.538 124.638 190.158 127.411 190.024C130.183 189.889 132.867 189.004 135.177 187.463L184.197 154.773C186.297 153.373 188.019 151.475 189.21 149.25C190.401 147.025 191.024 144.54 191.024 142.015C191.024 139.491 190.401 137.006 189.21 134.781C188.019 132.555 186.297 130.658 184.197 129.258V129.243Z"></path>
                                        {{-- <path class="stroke-neutral-100" d="M280 142C280 160.122 276.431 178.067 269.495 194.81C262.56 211.553 252.395 226.766 239.581 239.581C226.766 252.395 211.553 262.56 194.81 269.495C178.067 276.431 160.122 280 142 280C123.878 280 105.933 276.431 89.1897 269.495C72.4468 262.56 57.2337 252.395 44.4193 239.581C31.6048 226.766 21.4398 211.553 14.5046 194.81C7.56947 178.067 4 160.122 4 142C4 105.4 18.5392 70.2993 44.4193 44.4193C70.2993 18.5392 105.4 4 142 4C178.6 4 213.701 18.5392 239.581 44.4193C265.461 70.2993 280 105.4 280 142Z" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path> --}}
                                    </svg>
                                </div>
                                <div x-show="currentlyPlaying" class="bg-neutral-900 bg-opacity-30  rounded-full p-0.5  xs:w-[190px] sm:w-[240px]">
                                    <svg class="w-8 h-8 text-neutral-100 fill-neutral-100 text-opacity-0 transition duration-150 ease-in-out hover:text-opacity-10" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                            <div class="bg-blend-overlay xs:mx-4 text-left xs:text-xs xs:font-light xs:tracking-tight sm:text-sm sm:font-normal sm:tracking-normal my-auto sm:mx-0 px-0 col-span-2">
                                <div class="sm:ml-2 xl:ml-4 lg:my-2.5">Bass - Missil</div>
                            </div>
                        </div>
                        <audio x-ref="audio">
                            <source src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb04_missil_a.mp3" type="audio/mp3"/>
                        </audio>
                    </div>
                    <div class="my-4 xs:flex xs:items-start " x-data="playaudio()">
                        <div class="grid xs:flex xs:items-start lg:grid-cols-3 xs:ml-4 sm:ml-4">
                            <button @click="playAndStop" type="button" class="h-9 w-9 relative rounded-xl group cursor-pointer justify-end mx-auto my-auto">
                                <div x-show="!currentlyPlaying" class="bg-neutral-900 rounded-full p-0.5">
                                    <svg class="w-8 h-8 text-neutral-100 text-opacity-0 hover:text-opacity-10 fill-current transition duration-1000 ease-in-out rounded-full hover:scale-125" viewBox="0 0 284 284" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-neutral-100" d="M184.197 129.243L135.177 96.5521C132.865 95.01 130.178 94.1249 127.403 93.9915C124.628 93.8581 121.868 94.4813 119.419 95.7946C116.971 97.1079 114.925 99.0619 113.501 101.448C112.077 103.834 111.327 106.562 111.333 109.34V174.706C111.333 177.482 112.086 180.206 113.513 182.588C114.939 184.969 116.985 186.919 119.433 188.228C121.881 189.538 124.638 190.158 127.411 190.024C130.183 189.889 132.867 189.004 135.177 187.463L184.197 154.773C186.297 153.373 188.019 151.475 189.21 149.25C190.401 147.025 191.024 144.54 191.024 142.015C191.024 139.491 190.401 137.006 189.21 134.781C188.019 132.555 186.297 130.658 184.197 129.258V129.243Z"></path>
                                        {{-- <path class="stroke-neutral-100" d="M280 142C280 160.122 276.431 178.067 269.495 194.81C262.56 211.553 252.395 226.766 239.581 239.581C226.766 252.395 211.553 262.56 194.81 269.495C178.067 276.431 160.122 280 142 280C123.878 280 105.933 276.431 89.1897 269.495C72.4468 262.56 57.2337 252.395 44.4193 239.581C31.6048 226.766 21.4398 211.553 14.5046 194.81C7.56947 178.067 4 160.122 4 142C4 105.4 18.5392 70.2993 44.4193 44.4193C70.2993 18.5392 105.4 4 142 4C178.6 4 213.701 18.5392 239.581 44.4193C265.461 70.2993 280 105.4 280 142Z" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path> --}}
                                    </svg>
                                </div>
                                <div x-show="currentlyPlaying" class="bg-neutral-900 bg-opacity-30  rounded-full p-0.5  xs:w-[190px] sm:w-[240px]">
                                    <svg class="w-8 h-8 text-neutral-100 fill-neutral-100 text-opacity-0 transition duration-150 ease-in-out hover:text-opacity-10" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                            <div class="bg-blend-overlay xs:mx-4 text-left xs:text-xs xs:font-light xs:tracking-tight sm:text-sm sm:font-normal sm:tracking-normal my-auto sm:mx-0 px-0 col-span-2 ">
                                <div class="sm:ml-2 xl:ml-4 lg:my-2.5">Bass - Spin</div>
                            </div>
                        </div>
                        <audio x-ref="audio">
                            <source src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb05_spin_d.mp3" type="audio/mp3"/>
                        </audio>
                    </div>
                    <div class="my-4 xs:flex xs:items-start " x-data="playaudio()">
                        <div class="grid xs:flex xs:items-start lg:grid-cols-3 xs:ml-4 sm:ml-4">
                            <button @click="playAndStop" type="button" class="h-9 w-9 relative rounded-xl group cursor-pointer mx-auto my-auto">
                                <div x-show="!currentlyPlaying" class="bg-neutral-900 rounded-full p-0.5">
                                    <svg class="w-8 h-8 text-neutral-100 text-opacity-0 hover:text-opacity-10 fill-current transition duration-1000 ease-in-out rounded-full hover:scale-125" viewBox="0 0 284 284" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-neutral-100" d="M184.197 129.243L135.177 96.5521C132.865 95.01 130.178 94.1249 127.403 93.9915C124.628 93.8581 121.868 94.4813 119.419 95.7946C116.971 97.1079 114.925 99.0619 113.501 101.448C112.077 103.834 111.327 106.562 111.333 109.34V174.706C111.333 177.482 112.086 180.206 113.513 182.588C114.939 184.969 116.985 186.919 119.433 188.228C121.881 189.538 124.638 190.158 127.411 190.024C130.183 189.889 132.867 189.004 135.177 187.463L184.197 154.773C186.297 153.373 188.019 151.475 189.21 149.25C190.401 147.025 191.024 144.54 191.024 142.015C191.024 139.491 190.401 137.006 189.21 134.781C188.019 132.555 186.297 130.658 184.197 129.258V129.243Z"></path>
                                        {{-- <path class="stroke-neutral-100" d="M280 142C280 160.122 276.431 178.067 269.495 194.81C262.56 211.553 252.395 226.766 239.581 239.581C226.766 252.395 211.553 262.56 194.81 269.495C178.067 276.431 160.122 280 142 280C123.878 280 105.933 276.431 89.1897 269.495C72.4468 262.56 57.2337 252.395 44.4193 239.581C31.6048 226.766 21.4398 211.553 14.5046 194.81C7.56947 178.067 4 160.122 4 142C4 105.4 18.5392 70.2993 44.4193 44.4193C70.2993 18.5392 105.4 4 142 4C178.6 4 213.701 18.5392 239.581 44.4193C265.461 70.2993 280 105.4 280 142Z" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path> --}}
                                    </svg>
                                </div>
                                <div x-show="currentlyPlaying" class="bg-neutral-900 bg-opacity-30  rounded-full p-0.5  xs:w-[190px] sm:w-[240px]">
                                    <svg class="w-8 h-8 text-neutral-100 fill-neutral-100 text-opacity-0 transition duration-150 ease-in-out hover:text-opacity-10" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                            <div class="bg-blend-overlay xs:mx-4 text-left xs:text-xs xs:font-light xs:tracking-tight sm:text-sm sm:font-normal sm:tracking-normal my-auto sm:mx-0 px-0 col-span-2">
                                <div class="sm:ml-2 xl:ml-4 lg:my-2.5">Bass - Edge</div>
                            </div>
                        </div>
                        <audio x-ref="audio">
                            <source src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb06_edge_a.mp3" type="audio/mp3"/>
                        </audio>
                    </div>
                    <div class="my-4 xs:flex xs:items-start " x-data="playaudio()">
                        <div class="grid xs:flex xs:items-start lg:grid-cols-3 xs:ml-4 sm:ml-4">
                            <button @click="playAndStop" type="button" class="h-9 w-9 relative rounded-xl group cursor-pointer justify-end mx-auto my-auto">
                                <div x-show="!currentlyPlaying" class="bg-neutral-900 rounded-full p-0.5">
                                    <svg class="w-8 h-8 text-neutral-100 text-opacity-0 hover:text-opacity-10 fill-current transition duration-1000 ease-in-out rounded-full hover:scale-125" viewBox="0 0 284 284" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-neutral-100" d="M184.197 129.243L135.177 96.5521C132.865 95.01 130.178 94.1249 127.403 93.9915C124.628 93.8581 121.868 94.4813 119.419 95.7946C116.971 97.1079 114.925 99.0619 113.501 101.448C112.077 103.834 111.327 106.562 111.333 109.34V174.706C111.333 177.482 112.086 180.206 113.513 182.588C114.939 184.969 116.985 186.919 119.433 188.228C121.881 189.538 124.638 190.158 127.411 190.024C130.183 189.889 132.867 189.004 135.177 187.463L184.197 154.773C186.297 153.373 188.019 151.475 189.21 149.25C190.401 147.025 191.024 144.54 191.024 142.015C191.024 139.491 190.401 137.006 189.21 134.781C188.019 132.555 186.297 130.658 184.197 129.258V129.243Z"></path>
                                        {{-- <path class="stroke-neutral-100" d="M280 142C280 160.122 276.431 178.067 269.495 194.81C262.56 211.553 252.395 226.766 239.581 239.581C226.766 252.395 211.553 262.56 194.81 269.495C178.067 276.431 160.122 280 142 280C123.878 280 105.933 276.431 89.1897 269.495C72.4468 262.56 57.2337 252.395 44.4193 239.581C31.6048 226.766 21.4398 211.553 14.5046 194.81C7.56947 178.067 4 160.122 4 142C4 105.4 18.5392 70.2993 44.4193 44.4193C70.2993 18.5392 105.4 4 142 4C178.6 4 213.701 18.5392 239.581 44.4193C265.461 70.2993 280 105.4 280 142Z" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path> --}}
                                    </svg>
                                </div>
                                <div x-show="currentlyPlaying" class="bg-neutral-900 bg-opacity-30  rounded-full p-0.5  xs:w-[190px] sm:w-[240px]">
                                    <svg class="w-8 h-8 text-neutral-100 fill-neutral-100 text-opacity-0 transition duration-150 ease-in-out hover:text-opacity-10" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                            <div class="bg-blend-overlay xs:mx-4 text-left xs:text-xs xs:font-light xs:tracking-tight sm:text-sm sm:font-normal sm:tracking-normal my-auto sm:mx-0 px-0 col-span-2 ">
                                <div class="sm:ml-2 xl:ml-4 lg:my-2.5">Bass - Slick</div>
                            </div>
                        </div>
                        <audio x-ref="audio">
                            <source src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb07_slick_f.mp3" type="audio/mp3"/>
                        </audio>
                    </div>

{{--                                 
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">Bass - Brick</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb02_brick_d.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">Bass - Wing</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb03_wing_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Missil</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb04_missil_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Spin</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb05_spin_d.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Edge</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb06_edge_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Slick</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb07_slick_f.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Doomsday</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb08_doomsday_g%23.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Floorplan</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb09_floorplan_d.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Lander</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb10_lander_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Fake</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb11_fake_a%23.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Landmark</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb12_landmark_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Cadmium</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb13_cadmium_c.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Farewell</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb14_farewell_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Altered</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb15_altered_e.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Flash</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb16_flash_f.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Bigfoot</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb17_bigfoot_f.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Illusion</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb18_illusion_g%23.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Liquid</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb19_liquid_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Classic</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb20_classic_f.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Infinity</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb21_infinity_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Collider</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb22_collider_a%23.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Left</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb23_left_d%23.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Peaceful</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb24_peaceful_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Rotor</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb25_rotor_d.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Trench</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb26_trench_e.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Sorrow</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb27_sorrow_f%23.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Blob</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb28_blob_e.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Infinity</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb29_infinity_e.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Data Protocol</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb30_data_protocol_a%23.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Avidity</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb31_avidity_g%23.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Illusion</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb32_hyperloop_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Mesmer</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb33_mesmer_f%23.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Starship</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb34_starship_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Webb</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb35_webb_e.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Delta</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb36_delta_a%23.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Sparta</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb37_sparta_g%23.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Illusion</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb38_psycho_f%23.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Graveyard</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb39_graveyard_g.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Rover</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb40_rover_d%23.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Voices</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb41_voices_f%23.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Blade</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb42_blade_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Disgrace</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb43_disgrace_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Reckless</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb44_reckless_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Fiery</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb45_fiery_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Wander</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb46_wander_b.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Sceptic</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb47_sceptic_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                
                    <div class="span-1 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Flood</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="mejs_player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="mejs_player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb48_flood_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="span-2 my-4">
                                        <div class="grid xs:grid-cols-1 lg:grid-cols-2">
                                            <div class="text-center text-sm justify-items-center mx-auto my-auto">
                                                <div class="xs:mb-2 lg:my-2.5">KBL Bass - Compact</div>
                                            </div>
                                            <span class="mejs-offscreen">Audio Player</span>          
                                            <div id="mep_0" class="sm:w-48 md:w-72 lg:w-96 mejs-container mejs-container-keyboard-inactive mejs-ios mejs-iphone mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                                <div class="mejs-inner">
                                                <div class="mejs-mediaelement">
                                                    <mediaelementwrapper id="player">
                                                    <audio class="wp-audio-shortcode" preload="metadata" id="player1_html5" src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/KBL011_Deneb_Loops/kbldnb49_compact_a.mp3">
                                                    </audio>
                                                    </mediaelementwrapper>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                    </div> --}}
              
                </div>
            
            </div>

        </div>

    </div>

</div>