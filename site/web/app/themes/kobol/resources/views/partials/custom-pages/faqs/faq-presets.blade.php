<svg class="relative block bg-[#60a5f6] dark:bg-[#3c96f1]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
    <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="fill-zinc-700 dark:fill-zinc-800 "></path>
</svg>  

<div class="bg-[#60a5f6] dark:bg-[#3c96f1] text-neutral-800 flex justify-center py-12">

    <div class="relative py-0 px-6 sm:mx-2 text-center flex flex-col">    

        <div class="mt-0 mb-12 p-0">
            
            <h2 class="xs:text-xl xs:font-semibold xs:tracking-tight md:text-2xl md:font-semibold md:tracking-normal mt-0 mb-6 p-0">
                <span>
                    Frequently Asked Questions
                </span>
            </h2>  

            <div class="py-2 max-w-xl mx-auto flex flex-col text-xs dark:text-neutral-800" x-data="{selected:''}"> 

                <ul class="px-6 text-xl gap-2 rounded flex flex-col cursor-pointer font-semibold">

                    <li class="bg-[#f5f5f5] shadow-xl rounded-md" x-data="accordion(1)">

                        <button type="button" class="w-full xs:px-2 md:px-8 text-left" @click="selected != 1 ? selected = 1 : selected = null">

                            <div class="flex items-center justify-left my-2">

                                <svg :class="{'rotate-180': selected == 1}" class="fill-current text-neutral-800 h-6 w-6 transform duration-1000"viewBox="0 0 20 20" >     
                                    <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path> 
                                </svg>

                                <h3 class="xs:mx-1 md:mx-8 xs:text-sm xs:font-extralight xs:tracking-tighter md:text-lg md:font-light md:tracking-normal">
                                    What do i need?
                                </h3>

                            </div>

                        </button>

                        <div class="relative overflow-hidden transition-all max-h-0 duration-1000 xs:text-xs sm:text-sm xs:font-extralight sm:font-light bg-neutral-50 rounded-b-md shadow-inner" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                            
                            <div class="xs:px-4 xs:py-4 md:p-6 border-t border-neutral-200 text-left">
                                To use the presets, you will need to already own Xfer Serum v1.3.6 or higher.
                                <br>
                                Please note: The Xfer Serum VST/AU plugin is not included.
                            </div>

                        </div>

                    </li>

                    <li class="bg-[#f5f5f5] shadow-xl rounded-md" x-data="accordion(2)">

                        <button type="button" class="w-full xs:px-2 md:px-8 text-left" @click="selected != 2 ? selected = 2 : selected = null">

                            <div class="flex items-center justify-left my-2">

                                <svg :class="{'rotate-180': selected == 2}" class="fill-current text-neutral-800 h-6 w-6 transform duration-1000"viewBox="0 0 20 20" >          
                                    <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path> 
                                </svg>

                                <h3 class="xs:mx-1 md:mx-8 xs:text-sm xs:font-extralight xs:tracking-tighter md:text-lg md:font-light md:tracking-normal">
                                    What type of presets are included?
                                </h3>

                            </div>

                        </button>

                        <div class="relative overflow-hidden transition-all max-h-0 duration-1000 text-sm font-extralight bg-neutral-50 rounded-b-md shadow-inner" style="" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">

                            <div class="xs:px-4 xs:py-4 md:p-6 border-t border-neutral-200 text-left">
                                <p>Deneb contains:</p>
                                20 x Bass
                                <br>
                                10 x Pads
                                <br>
                                20 x Leads
                            </div>

                        </div>

                    </li>

                    <li class="bg-[#f5f5f5] shadow-xl rounded-md" x-data="accordion(3)">

                        <button type="button" class="w-full xs:px-2 md:px-8 text-left" @click="selected != 3 ? selected = 3 : selected = null">

                            <div class="flex items-center justify-left my-2">

                                <svg :class="{'rotate-180': selected == 3}" class="fill-current text-neutral-800 h-6 w-6 transform duration-1000"viewBox="0 0 20 20" >     
                                    <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path> 
                                </svg>

                                <h3 class="xs:mx-1 md:mx-8 xs:text-sm xs:font-extralight xs:tracking-tighter md:text-lg md:font-light md:tracking-normal">
                                    What's your refund policy?
                                </h3>

                            </div>

                        </button>

                        <div class="relative overflow-hidden transition-all max-h-0 duration-1000 text-sm font-extralight bg-neutral-50 rounded-b-md shadow-inner" style="" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">

                            <div class="xs:px-4 xs:py-4 md:p-6 border-t border-neutral-200 text-left">

                                <p>Due to the nature of digital downloads we offer refunds on a case-by-case basis. 
                                    If you have find any issues with a product get in touch within 14 days and let us know. 
                                    By completing a purchase you agree that the issue of a refund will be made at the sole discretion of the Kobol Music Staff and that all decisions made by the Kobol Music Staff are final.
                                    We are happy to issue a refund or store credit if your product is proven to be defective or not as described.
                                </p>

                                <p>Unfortunately unless our system has not registered a download - i.e. you have not attempted a download by clicking on the download link issued to you, we are unable to offer refunds if you change your mind. 
                                    Please read the product description and software requirements carefully.
                                </p>

                                <p>Further, Kobol Music does not refund products, if:</p>

                                • You no longer need the purchased product.
                                <br>
                                • You have changed your mind or found an alternative product.
                                <br>
                                • You cannot use the product due to hardware or software limitations - i.e. you do not own the compatible synthesiser for the product.
                                <br>
                                • You cannot use the product due to insufficient knowledge / know-how.
                                <br>
                                • We do not make any guarantees for product use with cracked or illegally downloaded software.
                                <br>

                                <p>Eligibility</p>

                                <p>A refund is eligible for 14 days from the date of purchase (found in your Order Confirmation Email).</p>

                                <p>Kobol Music strongly advises checking what software and/or hardware is required to use the products and what are the minimum hardware requirements to use the software. 
                                    Such information is always provided on the product pages. 
                                    Kobol Music does not refund products which require other software to use (Digital Audio Workstation-specific libraries, Software Synth Preset Banks). 
                                    The customer is responsible to have knowledge required to use the product.
                                </p>

                                <p>If you wish to request a return please contact us at sales@kobol-music.com, including your order number and any relevant information.</p>

                            </div>

                        </div>

                    </li>

                </ul>

            </div>

        </div> 

    </div> 
    
</div>