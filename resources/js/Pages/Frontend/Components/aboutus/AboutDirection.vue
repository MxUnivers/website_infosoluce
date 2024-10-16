<template>
    <div style="margin-top: 250px">
        <div class="container frame_section_bg"></div>
    </div>
    <!-- Direction -->
    <div>
        <div class="container-fluid d-flex presente_direction">
            <div class="presente_direction_text_container">
                <h1 class="presente_direction_title">Notre équipe</h1>
                <p class="presente_direction_description">
                    Rencontrez l’équipe d’Infosoluces, un groupe d’experts
                    passionnés et dévoués, prêts à relever vos défis
                    technologiques. Notre équipe combine expertise technique et
                    business pour offrir des solutions sur mesure à votre
                    entreprise.
                </p>
            </div>
            <div
                style="
                    height: 400px;
                    width: 10%;
                    background-color: white;
                    z-index: 1;
                "
            ></div>
            <div class="carousel">
                <div class="rectangle">
                    <img
                        :src="/assets/img/direction.svg"
                        alt=""
                        class="carousel-dirction-image"
                    />
                    <h6 class="text-center mt-5">Direction générale</h6>
                </div>
                <div class="rectangle">
                    <img
                        :src="/assets/img/d_techenique.svg"
                        alt=""
                        class="carousel-dirction-image"
                    />
                    <h6 class="text-center mt-5">Direction technique</h6>
                </div>
                <div class="rectangle">
                    <img
                        :src="/assets/img/innformatique.svg"
                        alt=""
                        class="carousel-dirction-image"
                    />
                    <h6 class="text-center mt-5">Informaticiens</h6>
                </div>
                <div class="rectangle">
                    <img
                        :src="/assets/img/electronique.svg"
                        alt=""
                        class="carousel-dirction-image"
                    />
                    <h6 class="text-center mt-5">Electriciens</h6>
                </div>
            </div>
        </div>
    </div>
</template>
<style></style>
<script setup></script>
