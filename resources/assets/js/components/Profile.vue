<template>
    <div id="profile">
        <div id="banner"></div>
        <div id="pfp"></div>

        <div id="profile-info">
            <h1>{{ this.fullName }}</h1>
            <h2>{{ this.jobTitle }}</h2>

            <!--<div class="social-icons">-->
                <!--<a :href="this.social.twitter"><span class="fa fa-twitter fa-2x"></span></a>-->
                <!--<a :href="this.social.github"><span class="fa fa-github fa-2x"></span></a>-->
                <!--<a :href="this.social.linkedin"><span class="fa fa-linkedin fa-2x"></span></a>-->
            <!--</div>-->
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
          return {
              fullName: 'Alex Crocker',
              jobTitle: 'Full Stack Developer',
              social: {
                  twitter: 'https://twitter.com/kd9/',
                  github: 'https://github.com/crock/',
                  linkedin: 'https://www.linkedin.com/in/awcrocker/'
              }
          }
        }
    }
</script>

<style lang="scss">
    #banner {
        position: relative;
        top: 50px;
        width: 100%;
        height: 200px;
        background: #6a2bd8;
        background: -moz-linear-gradient(left, #6a2bd8 0%, #3122d6 50%, #5b97ff 100%);
        background: -webkit-linear-gradient(left, #6a2bd8 0%,#3122d6 50%,#5b97ff 100%);
        background: linear-gradient(to right, #6a2bd8 0%,#3122d6 50%,#5b97ff 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6a2bd8', endColorstr='#5b97ff',GradientType=1 );
    }

    #pfp {
        background: url(/img/headshot500px.jpg);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        border: 6px solid #fff;
        position: absolute;
        top: 150px;
        left: 0;
        right:0;
        margin: 0 auto;
    }

    #profile-info {
        width: 100%;
        height: 160px;
        margin-top: 150px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;

        h1 {
            font-weight: 900;
            font-size: 2rem;
            color: #000;
            margin-bottom: 0;
            margin-top: 40px;
        }

        h2 {
            font-weight: 300;
            font-size: 1.1rem;
            color: #9B9B9B;
            margin-top: 10px;
            margin-bottom: 0;
        }
    }

    .social-icons {
        flex: 2;
        width: 50%;
        margin: 50px auto;
        display: flex;
        flex-flow: row nowrap;
        justify-content: space-around;
        align-items: center;
        text-align: center;

        a {
            span {
                color: #9B9B9B;
            }

            &:hover span {
                color: teal;
            }
        }
    }
</style>
