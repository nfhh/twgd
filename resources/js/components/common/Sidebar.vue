<template>
    <nav>
        <div class="one">
            <a href=""><img src="/images/home.png" alt="" width="40" height="40"></a>
        </div>
        <div class="two">
            <p><strong>{{ curProduct }}</strong></p>
            <p><strong>{{ installTip }}</strong></p>
        </div>
        <div class="three">
            <img src="/images/logo.svg" alt="" width="120" height="90">
        </div>
    </nav>
</template>

<script>
    export default {
        props: {
            curProduct: String,
            installTip: String
        },
    }
</script>
