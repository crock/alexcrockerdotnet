<template>
    <header class="day edge--bottom--reverse" id="particles-js">
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primaryNav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="primaryNav">
                <div class="navbar-nav" id="navbar">
                    <a class="nav-item nav-link" href="#work">Work</a>
                    <a class="nav-item nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </nav>
        <div class="title-info">
            <h1>Alex Crocker</h1>
            <p>web developer extraordinaire</p>
        </div>
    </header>
</template>

<style lang="scss">
header {
	background: #3097ff;
	width: 100%;
	height: 400px;
	position: relative;

	.title-info {
		z-index: 900;
		position: absolute;
		top: 50%;
		transform: translatey(-50%);
		right: 0;
		margin-right: 25px;
		text-align: right;

		h1 {
			font-weight: bold;
			color: #fff;
			font-size: 64px;
		}

		p {
			color: #9ce6ff;
			font-weight: 300;
			font-size: 21px;
			text-transform: uppercase;
		}
	}
}

@media screen and (max-width: 991px) {
	header {
		height: 400px;

		.title-info {
			right: unset;
			top: unset;
			transform: unset;
			bottom: 0;
			width: 100%;
			margin: 25px auto;
			text-align: center;

			h1 {
				font-size: 54px;
			}

			p {
				font-size: 18px;
			}
		}
	}
}

.navbar {
	width: 100%;
	position: fixed;
	display: flex;
	flex-flow: row wrap;
	justify-content: flex-end;
	z-index: 1000;
	background: #5199FF;
}

.navbar-collapse {
	flex-grow: unset;
}

.navbar-nav {
	align-items: center;
}

.nav-link {
	text-transform: uppercase;
	color: #9ce6ff;
	font-weight: 300;

	&:hover {
		color: #fff;
		border-radius: 10px;
	}
}

.nav-link.active {
	color: #000;
	background: #fff;
	border-radius: 10px;
}

.navbar-toggler {
	background: white;
	span {
		color: #3097ff;
	}
}

@media screen and (max-width: 991px) {
	.navbar-nav {
		.nav-link {
			display: block;
			padding: 0.75rem 25%;
		}
	}
}
</style>