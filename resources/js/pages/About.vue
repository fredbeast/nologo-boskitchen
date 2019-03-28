<template>
    <div style="padding-bottom: 100px">
        <b-modal id="modalAbout" title="About Bo">
            <p class="my-4">This is more stuff about me!</p>
        </b-modal>
        <div>
            <b-container v-bind:style="{ padding: '54px 0 0 0' }" class="h-100" fluid>
                <b-row>
                    <b-col cols="12">
                        <div class="top-img-full"
                             v-bind:style="{ backgroundImage: 'url(http://placehold.it/1200x600)'}">
                        </div>
                    </b-col>
                </b-row>
            </b-container>
            <b-container>
                <b-row>
                    <b-col md="8" offset-md="2">
                        <h2 class="mt-4 mb-2">About Bo</h2>
                        <hr>
                        <br>
                        <b-row>
                            <b-col md="9">
                                <p>Hi there! This is where I'm going to talk about myself and explain what I've been up to. For more info about me hit the button!</p>
                            </b-col>
                            <b-col md="3">
                                <b-button v-b-modal.modalAbout>Read More</b-button>
                            </b-col>
                        </b-row>
                        <hr>
                        <p>I've also got so much to keep you all filled in on, see below for my latest news posts!</p>
                        <p>... News Posts go here ...</p>
                    </b-col>
                </b-row>
            </b-container>
        </div>
    </div>
</template>