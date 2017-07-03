<template>
    <div id="my-posts">
        <div class="card" v-for="post in this.$parent.posts">
            <div class="heading">
                <h3>{{ post.title }}</h3>
                <div class="datetime">{{ post.date | date }}</div>
            </div>
            <div class="content">
                <p>{{ post.body_abstract | stripTags }}</p>
                <a :href="post.short_url" class="readMore">Read More</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        filters: {
            stripTags: function (str) {
                if (str === null) {
                    return ''
                } else {
                    return str.replace(/(<p>|<\/p>)/g, '')
                }
            },
            date: function (date) {
                if (date === null) {
                    return ''
                } else {
                    var d = new Date(date);
                    return d.toDateString();
                }
            }
        }
    }
</script>

<style lang="scss">
    #my-posts {
        position: relative;
        width: 90%;
        margin: 50px auto 50px auto;
    }

    .card {
        position: relative;
        margin-top: 25px;
        width: 100%;
        min-height: 200px;
        background: #fff;
        box-shadow: 1px 1px 10px #B5B4B6;
        padding: 15px;

        .heading {
            padding: 15px;

            h3 {
                font-size: 2rem;
                font-weight: 300;
                color: teal;
            }

            .datetime {
                color: #9B9B9B;
                font-style: italic;
                font-size: 1rem;
            }
        }

        .content {
            padding: 15px;

            p {
                font-weight: 300;
                line-height: 1.5rem;
                color: #000;
            }

            .readMore {
                text-align: left;
                text-decoration: none;
                color: teal;
                margin-bottom: 25px;
            }
        }

        .actions {
            padding: 15px;

            ul {
                list-style: none !important;
                display: flex;
                flex-direction: row;
                justify-content: space-around;

                li {
                    margin: 10px;
                }
            }
        }
    }
</style>