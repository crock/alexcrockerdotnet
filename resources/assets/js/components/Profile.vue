<template>
    <div id="profile">
        <div id="banner" :class="timeOfDay"></div>
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
        computed: {
            timeOfDay: function () {
                let d = new Date();
                let time = d.getHours();
                if (time >= 20 || time < 5) {
                    // If time is between 8PM - 4AM
                    time = "night";
                } else if (time >= 17 && time < 20) {
                    // If time is between 5PM – 7PM
                    time = "sunset";
                } else if (time >= 5 && time < 8) {
                    // If time is between 5AM - 7AM
                    time = "sunrise";
                } else {
                    // Else time is day
                    time = "day";
                }
                return time;
            }
        },
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
    }

    .default-banner {
        background: #93cede;
        background: -moz-radial-gradient(center, ellipse cover, #93cede 0%, #75bdd1 50%, #49a5bf 100%);
        background: -webkit-radial-gradient(center, ellipse cover, #93cede 0%,#75bdd1 50%,#49a5bf 100%);
        background: radial-gradient(ellipse at center, #93cede 0%,#75bdd1 50%,#49a5bf 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#93cede', endColorstr='#49a5bf',GradientType=1 );
    }

    .night {
        background: #004177;
        background: -moz-linear-gradient(top, #004177 0%, #1966ff 100%);
        background: -webkit-linear-gradient(top, #004177 0%,#1966ff 100%);
        background: linear-gradient(to bottom, #004177 0%,#1966ff 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#004177', endColorstr='#1966ff',GradientType=0 );
    }

    .day {
        background: #3097ff;
        background: -moz-linear-gradient(top, #3097ff 0%, #7cd5ff 100%);
        background: -webkit-linear-gradient(top, #3097ff 0%,#7cd5ff 100%);
        background: linear-gradient(to bottom, #3097ff 0%,#7cd5ff 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3097ff', endColorstr='#7cd5ff',GradientType=0 );
    }

    .sunrise {
        background: #cefffe;
        background: -moz-linear-gradient(top, #cefffe 20%, #cefffe 20%, #fff791 51%, #febf04 100%);
        background: -webkit-linear-gradient(top, #cefffe 20%,#cefffe 20%,#fff791 51%,#febf04 100%);
        background: linear-gradient(to bottom, #cefffe 20%,#cefffe 20%,#fff791 51%,#febf04 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cefffe', endColorstr='#febf04',GradientType=0 );
    }

    .sunset {
        background: #ffff0a;
        background: -moz-linear-gradient(top, #ffff0a 0%, #ff920a 55%, #c43a3a 100%);
        background: -webkit-linear-gradient(top, #ffff0a 0%,#ff920a 55%,#c43a3a 100%);
        background: linear-gradient(to bottom, #ffff0a 0%,#ff920a 55%,#c43a3a 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffff0a', endColorstr='#c43a3a',GradientType=0 );
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
