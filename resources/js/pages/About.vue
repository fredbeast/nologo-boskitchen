<template>
    <transition name="fadeDelay">

        <div style="padding-bottom: 100px">
            <b-modal id="modalAbout" title="About Bo">
                <p class="my-2">
                    Hi, I am Bo, the cook, blogger, photographer and stylist behind Bo’s Kitchen!  I create all my dishes from my home in England, where I live with my two cats. I have a huge passion for herbal tea, desserts and peanut butter!
                    My goal is to show you how nutritious, delicious, colourful and inspiring vegan recipes can be. Everybody is welcome here - vegan or not, I’m sure you’ll find something to tempt you! Thank you for stopping by and let me know if you have any comments or recipe requests.</p>
            </b-modal>
            <div>
                <b-container v-bind:style="{ padding: '54px 0 0 0' }" class="h-100">
                    <div class="top-img-full"
                         v-bind:style="{ backgroundImage: 'url(https://s3.eu-west-2.amazonaws.com/boskitchen/assets/bo-about-image.jpg)'}">
                    </div>
                </b-container>
                <b-container>
                    <b-row>
                        <b-col md="8" offset-md="2">
                            <h2 class="mt-4 mb-2">About Bo</h2>
                            <hr>
                            <br>
                            <b-row>
                                <b-col md="9">
                                    <p>
                                        Hello there and welcome to my kitchen! This section is where I talk about what I have been up to and share more about myself. For more info about me, hit the button below.</p>
                                </b-col>
                                <b-col md="3">
                                    <b-button v-b-modal.modalAbout>Read More</b-button>
                                </b-col>
                            </b-row>
                            <hr>
                            <p>See below for my latest new posts! (coming soon)</p>
                        </b-col>
                    </b-row>
                </b-container>
            </div>
        </div>
    </transition>
</template>