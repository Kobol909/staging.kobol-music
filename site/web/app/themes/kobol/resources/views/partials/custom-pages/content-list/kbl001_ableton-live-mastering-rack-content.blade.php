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

<div class="text-[#444] dark:text-[#aaa] flex justify-center xs:py-2 sm:py-4 lg:py-12 2xl:py-16">

    <div class="relative text-center flex flex-col py-0 xs:px-6 lg:px-9 sm:mx-2">

        <div class="my-0 xs:p-2 lg:p-5">

            <h2 class="xs:text-xl lg:text-2xl 2xl:text-3xl font-bold 2xl:font-extrabold tracking-wide mb-1">
                Fully mapped audio effect chain
            </h2>

            <div class="xs:text-base lg:text-lg 2xl:text-xl font-light 2xl:font-normal tracking-tighter">
                See what you get for free!
            </div>

        </div>

        <div class="mx-auto text-center xs:font-extralight xs:tracking-tighter xs:text-xs sm:text-base sm:font-light sm:tracking-tight grid grid-cols-1 scale-100 hover:scale-105 transition duration-1000 ease-in-out xs:mt-2 sm:mt-4 lg:mt-12 2xl:mt-9 mb-4">
            <img class="border-4 border-[#444] shadow-md rounded-md" src="https://koboldl.s3.eu-west-3.amazonaws.com/images/2+Bus+Master+Chain.png" alt="AbletonLiveMasterChain">
        </div>

        <div class="my-0 xs:p-2 lg:p-5">

            <h2 class="xs:text-xl lg:text-2xl 2xl:text-3xl font-bold 2xl:font-extrabold tracking-wide underline underline-offset-2 uppercase mb-1">
                AUDIO DEMO
            </h2>

            <div class="xs:text-base lg:text-lg 2xl:text-xl font-light 2xl:font-normal tracking-tighter">
                Below is a Gain matched drum loop to showcase our Master Rack in action.
            </div>
            
            <div class="mx-auto justify-center xs:mr-[69%] sm:mr-[51%] md:mr-[42%] lg:mr-[24%] xl:mr-[26%] 2xl:mr-[51%] 4xl:mr-[44%] mt-4 xl:mt-9 2xl:mt-12 4xl:mt-6 m-0 " x-data="playaudio()">
                    <button @click="playAndStop" type="button" class="h-9 w-9 rounded-xl group cursor-pointer">
                        <div x-show="!currentlyPlaying" class="bg-[#444] dark:bg-[#aaa] rounded-full p-0.5 xs:w-[190px] sm:w-[240px] 2xl:w-[600px]">
                            <svg class="w-8 h-8 text-neutral-100 text-opacity-0 hover:text-opacity-10 fill-current transition duration-1000 ease-in-out rounded-full hover:scale-125" viewBox="0 0 284 284" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-neutral-100" d="M184.197 129.243L135.177 96.5521C132.865 95.01 130.178 94.1249 127.403 93.9915C124.628 93.8581 121.868 94.4813 119.419 95.7946C116.971 97.1079 114.925 99.0619 113.501 101.448C112.077 103.834 111.327 106.562 111.333 109.34V174.706C111.333 177.482 112.086 180.206 113.513 182.588C114.939 184.969 116.985 186.919 119.433 188.228C121.881 189.538 124.638 190.158 127.411 190.024C130.183 189.889 132.867 189.004 135.177 187.463L184.197 154.773C186.297 153.373 188.019 151.475 189.21 149.25C190.401 147.025 191.024 144.54 191.024 142.015C191.024 139.491 190.401 137.006 189.21 134.781C188.019 132.555 186.297 130.658 184.197 129.258V129.243Z"></path>
                            </svg>
                        </div>
                        <div x-show="currentlyPlaying" class="bg-[#ffb700] rounded-full p-0.5 xs:w-[190px] sm:w-[240px] 2xl:w-[600px]">
                            <svg class="w-8 h-8 text-neutral-100 fill-neutral-100 text-opacity-0 transition duration-150 ease-in-out hover:text-opacity-10" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                <audio x-ref="audio">
                    <source src="https://koboldl.s3.eu-west-3.amazonaws.com/Mp3/2+Bus+Master+Rack+Demo.wav" type="audio/mp3"/>
                </audio>
            </div>

        </div>

    </div>

</div>