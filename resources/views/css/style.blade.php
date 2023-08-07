<style>
    * {
        padding: 0%;
        margin: 0%;
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        background: url("/storage/page/background.jpg");
        background-size: cover;
        background-attachment: fixed;
        color: #ffffff;
    }

    .navbar-nav {
        gap: 1rem;
    }

    .content-container {
        min-height: 100vh;
    }

    .register-button {
        background: #1f1f1f;
        border: 4px ridge aqua;
        font-weight: 700;
        color: white;
        padding-inline: 20px;
        box-shadow: 2px 2px 6px inset white;
    }

    .register-button:hover {
        background: #1f1f1f !important;
        border: 4px ridge aqua !important;
        font-weight: 700;
        box-shadow: -2px -2px 6px inset white;
    }


    .main-logo {
        max-width: 20rem;
    }

    .main-title {
        font-size: 3rem;
        text-shadow: 0px 0px 10px aqua;
    }

    .navbar {
        font-weight: 600;
    }

    .bg-gradient {
        background: linear-gradient(to bottom, rebeccapurple, DarkMagenta, Fuchsia) !important;
    }

    .border_semi_round {
        border-radius: 10px;
    }

    .bg_transparent {
        background: rgba(187, 0, 187, 0.43);
    }

    .separator {
        height: 12px;
        background: radial-gradient(purple, darkviolet, magenta);
    }

    article a,
    h1,
    h2,
    h3 {
        color: fuchsia;
    }

    article strong {
        color: gold;
    }

    @media screen and (max-width: 992px) {
        .navbar-nav {
            gap: 0;
        }

        .main-title {
            font-size: 2rem;
            background: #00000080;
            display: none;
        }

        .border_semi_round {
            border-radius: 0;
        }

        .bg-transparent {
            font-size: 1rem;
        }

        .navbar-toggler {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        h1,
        h2 {
            text-align: center;
        }
    }
</style>
