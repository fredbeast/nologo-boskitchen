<template>
    <transition name="fade">

        <b-container v-bind:style="{ paddingTop: '75px' }" class="h-100">
            <b-row class="mt-3 mb-5 pb-5">
                <b-col cols="12">
                    <h2>Feedback</h2>
                    <hr>
                    <br>
                    <p>
                        This app for all my recipes has been worked on over the last couple of months. There's still a lot of work to be done and please help build the app with me!</p>
                    <p>
                        Do tell me ANY of your thoughts about the app and if there's any features that you think are missing. You're the best!</p>
                    <b-button variant="primary" href="https://nologo.typeform.com/to/Ifu8HS" target="_blank">
                        Give Feedback
                    </b-button>
                    <hr>
                    <p>Separately, here is the privacy policy for this app.</p>
                    <b-button v-b-modal.modalPrivacy>View Privacy Policy</b-button>
                    <!-- Modal Component -->
                    <b-modal id="modalPrivacy" title="Privacy Policy">
                        <p>
                            Thank you for using our site(s). I am sure that like us, you like to have your personal details used appropriately. Please see below for further information on our Privacy Policy.
                        </p>
                        <p>

                            No Logo Media Limited is a media owner, media manager and digital publisher running online platforms. We work in partnership with social media influencers, providing various services to them and their communities. This Privacy Policy explains how we use information we collect from you when you use our site(s). We keep our Privacy Policy under regular review. Any updates will be posted on the relevant web page and, where appropriate, notified to you by e-mail. This Privacy Policy was last updated on 26 March 2019. If you have privacy questions which are not answered by this Privacy Policy or any other queries about how we use your information, please contact us at yes@no-logo.co
                        </p>
                        <p>

                            No Logo Media Limited (“No Logo”) is registered in Scotland with its Registered Office at 4th Floor, 115 George Street, Edinburgh, EH2 4JN. Company No. SC581670
                        </p>
                        <a href=" https://app.termly.io/document/privacy-notice/a45c85cb-9605-4928-a653-000f8c4bb6e2
">View full Privacy Policy
                        </a>
                    </b-modal>
                </b-col>
            </b-row>

        </b-container>
    </transition>
</template>
