<template>
    <div class="container_bg_element">
        <div class="container_element">
            <h1 class="container_title">
                Nous accordons de la valeur a tous vos besoin
            </h1>
            <p class="container_text">
                Nous voulons en savoir plus sur vos besoin
            </p>
            <button class="hexagon-btn btn_element">Demander un devis</button>
        </div>
    </div>
</template>

<script></script>

<style scoped>


.container_bg_element {
    background: url('assets/img/valeur.svg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 420px;
    margin-bottom: -20px;
}

.container_element{
	padding: 50px 100px; width: 100%; position: relative
}

.container_title {
    font-family: Syne;
    color: white;
    font-weight: 600;
    font-size: 50px;
    line-height: 1.6;
}

.container_text {
    font-family: Syne;
    color: white;
    font-size: 20px;
    margin-top: 20px;
}

.btn_element {
    color: #2286bb;
    background-color: white;
    margin-top: 20px;
}

/* Entre table */
@media (max-width: 768px) {

    .container_bg_element {
        background: url('assets/img/valeur.svg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 420px;
        margin-bottom: -20px;
    }

	.container_element{
		padding: 10px 100px; width: 100%; position: relative
	}

    .container_title {
        font-family: Syne;
        color: white;
        font-weight: 600;
        font-size: 20px;
        line-height: 1.6;
    }

    .container_text {
        font-family: Syne;
        color: white;
        font-size: 12px;
        margin-top: 20px;
    }

    .btn_element {
        color: #2286bb;
        background-color: white;
        margin-top: 20px;
    }
}

/* Entre table */
@media (min-width: 768px) and (max-width: 1200px) {
    .container_bg_element {
        background: url('assets/img/valeur.svg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 420px;
        margin-bottom: -20px;
    }

	.container_element{
		padding: 10px 100px; width: 60%; position: relative
	}

    .container_title {
        font-family: Syne;
        color: white;
        font-weight: 600;
        font-size: 20px;
        line-height: 1.6;
    }

    .container_text {
        font-family: Syne;
        color: white;
        font-size: 20px;
        margin-top: 20px;
    }

    .btn_element {
        color: #2286bb;
        background-color: white;
        margin-top: 20px;
    }

}

/* Entre table */
@media (min-width: 1350px) and {
    .container_bg_element {
        background: url('assets/img/valeur.svg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 420px;
        margin-bottom: -20px;
    }

	.container_element{
	padding: 10px 100px; width: 50%; position: relative
}

    .container_title {
        font-family: Syne;
        color: white;
        font-weight: 600;
        font-size: 50px;
        line-height: 1.6;
    }

    .container_text {
        font-family: Syne;
        color: white;
        font-size: 20px;
        margin-top: 20px;
    }

    .btn_element {
        color: #2286bb;
        background-color: white;
        margin-top: 20px;
    }
}
</style>
