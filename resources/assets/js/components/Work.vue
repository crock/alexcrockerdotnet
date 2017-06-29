<template>
    <div id="my-work">
        <div class="work" v-for="work in this.works">
            <img :src="work.img" :alt="work.imgAlt" />
            <div class="overlay">
                <div class="text">{{ work.title }}</div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                works: [
                    {title: 'Alpha', img: 'https://placehold.it/250x250', imgAlt: 'work 1'},
                    {title: 'Bravo', img: 'https://placehold.it/250x250', imgAlt: 'work 2'},
                    {title: 'Charlie', img: 'https://placehold.it/250x250', imgAlt: 'work 3'},
                    {title: 'Delta', img: 'https://placehold.it/250x250', imgAlt: 'work 4'}
                ]
            };
        },
        mounted() {
            console.log('Work component mounted.')
        }
    }
</script>

<style lang="scss">
    #my-work {
        position: relative;
        margin-top: 150px;
    }
    .work {
        position: relative;
        width: calc(50% - 2px);
        height: auto;
        margin: 1px;
    }

    .image {
        display: block;
        width: 100%;
        height: auto;
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
            justify-content: space-between;
        }
    }

    @media screen and (min-width: 769px) {
        #my-work {
            display: flex;
            flex-flow: row wrap;
            justify-content: space-around;
        }
        #my-work img {
            width: 250xp;
            height: 250px;
            margin: 25px 0;
        }
    }
</style>
