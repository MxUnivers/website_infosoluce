<template>
<Link :href="route('contact')">
    <img
        :src="'/img/Chat-bot.svg'"
        alt="chat-bot"
        style="
            position: fixed;
            right: 30px;
            bottom: 30px;
            z-index: 1;
            cursor: pointer;
        "
    />
    </Link>

    <div
        style="
            position: relative;
            background: url('/img/bg_detail_service.svg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 60vh; "
    >

        <div class="container">
            <div class="d-flex element_text_banner">
                <p style="color: white; margin-top: 13px; cursor: pointer">
                    Nos Services
                </p>
                <img :src="'/img/play.svg'" alt="" />
                <p style="color: white; margin-top: 13px;">
                    Service maintenance et dépannage
                </p>
            </div>
            <h1 class="text-white element_text_banner_title" style="text-size:20px;">
                Le Support Technique Qui Fait la Différence
            </h1>
        </div>

        <MenuFront />
    </div>

    <!-- Frame section -->

    <!-- detail section -->
    <div class="container text-center" style="width: 50%; margin-top: 80px">
        <p class="m-5" style="font-family: syne; font-size: 20px">
            Découvrez chez Infosoluces une gamme complète de solutions pour
            entreprises pour optimiser votre infrastructure technologique et
            renforcer la sécurité de votre entreprise.
        </p>
    </div>

    <div
        class="container d-flex justify-content-between"
        style="margin-bottom: 10px; margin-top: 40px"
    >
        <div class="row col-12">
            <div class="col-lg-4 col-md-4 col-xm-12 d-flex my-4">
                <img
                    :src="'/img/vector.svg'"
                    alt=""
                    style="width: 50px; height: 50px"
                />
                <p
                    style="
                        font-size: 20px;
                        color: #2286bb;
                        margin-top: 10px;
                        font-family: syne;
                    "
                >
                    Maintenance et dépannage
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-xm-12 d-flex my-4">
                <img
                    :src="'/img/vector.svg'"
                    alt=""
                    style="width: 50px; height: 50px"
                />
                <p
                    style="
                        font-size: 20px;
                        color: #2286bb;
                        margin-top: 10px;
                        font-family: syne;
                    "
                >
                    Déploiement et audit réseau informatique
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-xm-12 d-flex my-4">
                <img
                    :src="'/img/vector.svg'"
                    alt=""
                    style="width: 50px; height: 50px"
                />
                <p
                    style="
                        font-size: 20px;
                        color: #2286bb;
                        margin-top: 10px;
                        font-family: syne;
                    "
                >
                    Déploiement et audit réseau informatique
                </p>
            </div>
        </div>
    </div>
    <div
        class="container d-flex justify-content-between"
        style="margin-bottom: 50px; margin-top: 10px"
    >
        <div class="row col-12">
            <div class="col-lg-4 col-md-4 col-xm-12 d-flex my-4">
                <img
                    :src="'/img/vector.svg'"
                    alt=""
                    style="width: 50px; height: 50px"
                />
                <p
                    style="
                        font-size: 20px;
                        color: #2286bb;
                        margin-top: 10px;
                        font-family: syne;
                    "
                >
                    Maintenance et dépannage
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-xm-12 d-flex my-4">
                <img
                    :src="'/img/vector.svg'"
                    alt=""
                    style="width: 50px; height: 50px"
                />
                <p
                    style="
                        font-size: 20px;
                        color: #2286bb;
                        margin-top: 10px;
                        font-family: syne;
                    "
                >
                    Déploiement et audit réseau informatique
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-xm-12 d-flex my-4">
                <img
                    :src="'/img/vector.svg'"
                    alt=""
                    style="width: 50px; height: 50px"
                />
                <p
                    style="
                        font-size: 20px;
                        color: #2286bb;
                        margin-top: 10px;
                        font-family: syne;
                    "
                >
                    Déploiement et audit réseau informatique
                </p>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="detail-info-section" style="margin-bottom: 50px">
        <div class="detail-info-box">
            <h6 class="mb-3">Plus d'informations sur le service maintenance</h6>
            <p>
                Grâce à une excellente équipe d’assistance réactive, nous nous
                chargerons d’assurer un service de maintenance informatique
                optimal sur les équipements de sécurité comme les firewalls, les
                serveurs, les ordinateurs, les imprimantes, les éléments du
                réseau, la sauvegarde de données et vos points d’accès.
            </p>
        </div>
        <div class="detail-info-box">
            <h6 class="mb-3">Maintenance des postes de travail</h6>
            <p>
                Installation et déploiement des postes de travail sous Windows
                et Mac. Installation et mise à jour des antivirus, des
                logiciels. Configuration d’adresse mail professionnel et
                Imprimante. Sauvegarde régulière de vos données.
            </p>
        </div>
        <div class="detail-info-box">
            <h6 class="mb-3">Nos propositions de forfait</h6>
            <ul style="font-size: 15px; font-family: syne; font-weight: 100">
                <li style="font-family: syne">Maintenance sous contrat</li>
                <li style="font-family: syne">Nombre d’utilisateurs</li>
                <li style="font-family: syne">Taille de l’infrastructure</li>
                <li style="font-family: syne">
                    Paiement mensuel d’un montant forfaitaire
                </li>
                <li style="font-family: syne">Maintenance ponctuelle</li>
                <li style="font-family: syne">
                    Paiement de facture après chaque intervention du technicien
                </li>
            </ul>
        </div>
    </div>
    <!-- valeur section -->

    <DetailServiceValue />

    <Footer />
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import MenuFront from '../Layouts/Partials/MenuFront.vue'
import Footer from '../Layouts/Partials/Footer.vue'
import DetailServiceValue from '../Components/detailservice/DetailServiceValue.vue'

export default {
    components: {
        MenuFront,
        DetailServiceValue,
        Footer
    }
}
</script>

<style scoped>
.element_text_banner {
    position: absolute;
    margin-top: 20%;
}

.element_text_banner_title {
    position: absolute;
    margin-top: 23%;
    line-height: 1.8;
    color: white;
}

/* Entre table */
@media (max-width: 768px) {
    .element_text_banner {
        position: absolute;
        margin-top: 20%;
    }

    .element_text_banner_title {
        position: absolute;
        margin-top: 23%;
        line-height: 1.8;
        color: white;
    }
}

/* Entre table */
@media (min-width: 768px) and (max-width: 1200px) {
    /* Your styles here */
}
</style>
