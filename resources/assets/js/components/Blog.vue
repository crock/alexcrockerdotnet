<template>
    <div id="my-posts">
        <div class="card text">
            <div class="heading">
                <h3>Post Title</h3>
                <div class="datetime">Jun 27, 2017</div>
            </div>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, officiis!</p>
                <a href="" class="readMore">Read More</a>
            </div>
            <div class="actions">
                <ul>
                    <li><i class="fa fa-heart"></i></li>
                    <li><i class="fa fa-send"></i></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Blog component mounted.')
        }
    }
</script>

<style lang="scss">
    #my-posts {
        position: relative;
        width: 90%;
        margin: 150px auto 50px auto;
    }

    .card {
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