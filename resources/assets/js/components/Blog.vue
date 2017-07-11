<template>
    <div id="my-posts">
        <div class="card" v-for="post in parseJson">
            <div class="heading">
                <h3>{{ post.title }}</h3>
                <div class="datetime">{{ post.date | date }}</div>
            </div>
            <div class="content">
                <p v-html="post.body_abstract"></p>
                <a :href="post.short_url" class="readMore">Read More</a>
            </div>
        </div>
    </div>
</template>

<script>
    import marked from 'marked'

    export default {
        computed: {
          parseJson: function () {
              return JSON.parse(this.$session.get('posts'));
          }
        },
        filters: {
            markdownify: function (md) {
                marked.setOptions({
                    renderer: new marked.Renderer(),
                    gfm: true,
                    tables: true,
                    breaks: true,
                    pedantic: false,
                    sanitize: false,
                    smartLists: true,
                    smartypants: true
                });

                if (md === null) {
                    return ''
                } else {
                    return marked(md)
                }
            },
            stripTags: function (str) {
                if (str === null) {
                    return ''
                } else {
                    return str.replace(/(<p>|<\/p>)/g, '')
                }
            },
            date: function (dateString) {
                    let options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                    let date = dateString.match(/^\d\d\d\d-\d\d-\d\d/);
                    let d = new Date(date[0]);
                    return d.toLocaleDateString('en-US', options);
            }
        }
    }
</script>

<style lang="scss">
    #my-posts {
        position: relative;
        width: 90%;
        margin: 0 auto;
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
                padding-bottom: 25px;
            }

            .readMore {
                position: absolute;
                bottom: 0;
                right: 0;
                text-decoration: none;
                color: teal;
                padding: 25px;
            }
        }
    }

    @media screen and (min-width: 769px) {
        #my-posts {
            position: relative;
            display: flex;
            flex-flow: row wrap;
            justify-content: space-around;
            align-content: center;

            .card {
                flex: 1 200px;
                margin: 10px;
            }
        }
    }
</style>