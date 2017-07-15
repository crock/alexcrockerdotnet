<template>
    <div id="my-work">
        <div class="work" v-for="project in parseJson">
            <a :href="project.short_url" target="_blank">
                <div class="image" :style="'background-image: url('+ project.covers[404] +')'"></div>
                <div class="overlay">
                    <div class="text">{{ project.name }}</div>
                </div>
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        computed: {
            parseJson: function () {
                return JSON.parse(this.$session.get('projects'));
            }
        }
    }
</script>

<style lang="scss">
    #my-work {
        position: relative;
    }
    .work {
        position: relative;
        width: calc(50% - 2px);
        height: auto;
        margin: 1px;
        background: #000;
    }

    .image {
        display: block;
        width: 100%;
        height: 200px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .overlay {
        position: absolute;
        bottom: 100%;
        left: 0;
        right: 0;
        background-color: #008CBA;
        overflow: hidden;
        width: 100%;
        height:0;
        transition: .5s ease;
    }

    .work:hover .overlay {
        bottom: 0;
        height: 100%;
    }

    .text {
        white-space: nowrap;
        color: white;
        font-size: 20px;
        position: absolute;
        overflow: hidden;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }

    @media screen and (max-width: 768px) {
        #my-work {
            display: flex;
            flex-flow: row wrap;
            justify-content: space-around;
        }
    }

    @media screen and (min-width: 769px) {
        #my-work {
            width: 650px;
            margin: 0 auto;
            display: flex;
            flex-flow: row wrap;
            justify-content: space-around;
        }
    }
</style>
