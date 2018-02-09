<template>
    <form id="contact" action="/message/send" method="post">
        <h3>Get in touch!</h3>
        <h4>Contact me for a quote, questions/concerns, or just to say hi.</h4>
        <fieldset>
            <input placeholder="Your name" name="name" type="text" tabindex="1" required>
        </fieldset>
        <fieldset>
            <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
        </fieldset>
        <fieldset>
            <input placeholder="Your Phone Number (optional)" name="phone" type="tel" tabindex="3">
        </fieldset>
        <fieldset>
            <textarea placeholder="Type your message here..." name="message" tabindex="4" required></textarea>
        </fieldset>
        <input type="hidden" :value="this.currentDate" name="dateSent">
        <fieldset>
            <button name="submit" type="submit" id="contact-submit">Submit</button>
        </fieldset>
    </form>
</template>

<script>
    export default {
        data () {
            return {
                currentDate: ""
            }
        },
        mounted() {
            let d = new Date();
            this.currentDate = d.toDateString();
        }
    }
</script>

<style lang="scss">
    #contact {
        position: relative;
        padding: 25px;
        width: 100%;

        h3 {
            display: block;
            font-size: 30px;
            font-weight: 300;
            margin-bottom: 10px;
        }

        h4 {
            margin: 5px 0 15px;
            display: block;
            font-size: 13px;
            font-weight: 400;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="url"],
        textarea,
        button[type="submit"] {
            font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
        }

        fieldset {
            border: medium none !important;
            margin: 0 0 10px;
            min-width: 100%;
            padding: 0;
            width: 100%;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="url"],
        textarea {
            width: 100%;
            border: 1px solid #ccc;
            background: #FFF;
            margin: 0 0 5px;
            padding: 10px;
        }

        input[type="text"]:hover,
        input[type="email"]:hover,
        input[type="tel"]:hover,
        input[type="url"]:hover,
        textarea:hover {
            -webkit-transition: border-color 0.3s ease-in-out;
            -moz-transition: border-color 0.3s ease-in-out;
            transition: border-color 0.3s ease-in-out;
            border: 1px solid #aaa;
        }

        textarea {
            height: 100px;
            max-width: 100%;
            resize: none;
        }

        button[type="submit"] {
            cursor: pointer;
            width: 100%;
            border: none;
            background: teal;
            color: #FFF;
            margin: 0 0 5px;
            padding: 10px;
            font-size: 15px;
        }

        button[type="submit"]:hover {
            background: #43A047;
            -webkit-transition: background 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out;
            transition: background-color 0.3s ease-in-out;
        }

        button[type="submit"]:active {
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        input:focus,
        textarea:focus {
            outline: 0;
            border: 1px solid #aaa;
        }
    }

    ::-webkit-input-placeholder {
        color: #888;
    }

    :-moz-placeholder {
        color: #888;
    }

    ::-moz-placeholder {
        color: #888;
    }

    :-ms-input-placeholder {
        color: #888;
    }

    @media screen and (min-width: 769px) {
        #contact {
            width: 650px;
            margin: 0 auto;
        }
    }
</style>
